import { Injectable } from '@nestjs/common';
import { HttpService } from '@nestjs/axios';
import { catchError, firstValueFrom } from 'rxjs';
import { AxiosError } from 'axios';
import { EnvService } from './env.service';

@Injectable()
export class FetchService {
  constructor(
    private readonly httpService: HttpService,
    private readonly envService: EnvService,
  ) {}

  async getOhangaron() {
    const { data } = await firstValueFrom(
      this.httpService.get<string>(this.envService.getOhangaronCurrent()).pipe(
        catchError((error: AxiosError) => {
          throw 'An error happened!';
        }),
      ),
    );
    return data;
  }
}
