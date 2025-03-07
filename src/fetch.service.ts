import { Injectable } from '@nestjs/common';
import { HttpService } from '@nestjs/axios';
import { catchError, firstValueFrom } from 'rxjs';
import { AxiosError, AxiosRequestConfig } from 'axios';
import { EnvService } from './env.service';

@Injectable()
export class FetchService {
  private readonly options: AxiosRequestConfig = { timeout: 5000 };

  constructor(
    private readonly httpService: HttpService,
    private readonly envService: EnvService,
  ) {}

  async getOhangaron() {
    const { data } = await firstValueFrom(
      this.httpService
        .get<string>(this.envService.getOhangaronCurrent(), this.options)
        .pipe(
          catchError((error: AxiosError) => {
            throw 'An error happened!';
          }),
        ),
    );
    return data;
  }
}
