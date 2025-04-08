import { Injectable } from '@nestjs/common';
import { HttpService } from '@nestjs/axios';
import { catchError, firstValueFrom } from 'rxjs';
import { AxiosError, AxiosRequestConfig } from 'axios';
import * as process from 'node:process';
import { Cron } from '@nestjs/schedule';
import { RedisService } from '../redis/redis.service';

@Injectable()
export class FetchService {
  private readonly options: AxiosRequestConfig = { timeout: 5000 };

  constructor(
    private readonly httpService: HttpService,
    private readonly redisService: RedisService,
  ) {}

  @Cron('0 */1 * * * *')
  async getData() {
    const urls = [
      process.env.URL_ANDIJON_29!,
      process.env.URL_ANDIJON_36!,
      process.env.URL_ANDIJON_KUDASH!,
      process.env.URL_CHIRCHIQ!,
      process.env.URL_FARXOD_16!,
      process.env.URL_FARXOD_ZOMIN!,
      process.env.URL_KFK!,
      process.env.URL_OXANGARON!,
      process.env.URL_QAMCHIQ!,
      process.env.URL_QODIRIYA!,
      process.env.URL_QUYI_BUZSUV!,
      process.env.URL_SAMARQAND!,
      process.env.URL_SHAXRIXON!,
      process.env.URL_TOSHKENT!,
      process.env.URL_TUPOLANG!,
      process.env.URL_URTA_CHIRCHIQ!,
      process.env.URL_XISORAK!,
    ];

    const keys = [
      process.env.KEY_ANDIJON_29!,
      process.env.KEY_ANDIJON_36!,
      process.env.KEY_ANDIJON_KUDASH!,
      process.env.KEY_CHIRCHIQ!,
      process.env.KEY_FARXOD_16!,
      process.env.KEY_FARXOD_ZOMIN!,
      process.env.KEY_KFK!,
      process.env.KEY_OXANGARON!,
      process.env.KEY_QAMCHIQ!,
      process.env.KEY_QODIRIYA!,
      process.env.KEY_QUYI_BUZSUV!,
      process.env.KEY_SAMARQAND!,
      process.env.KEY_SHAXRIXON!,
      process.env.KEY_TOSHKENT!,
      process.env.KEY_TUPOLANG!,
      process.env.KEY_URTA_CHIRCHIQ!,
      process.env.KEY_XISORAK!,
    ];

    const promises: Promise<void>[] = [];

    urls.forEach((url, index) => {
      promises.push(this.processUrl(url, keys[index]));
    });

    await Promise.all(promises);
  }

  async processUrl(url: string, key: string) {
    await this.redisService.setGesData(key, async () => {
      const { data } = await firstValueFrom(
        this.httpService.get<string>(url, this.options).pipe(
          catchError((error: AxiosError) => {
            console.log('fetch.service', url, key);
            console.log(error);
            // throw 'An error happened!';
            return [];
          }),
        ),
      );
      return data;
    });
  }
}
