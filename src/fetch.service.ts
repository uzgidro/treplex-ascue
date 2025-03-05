import { Injectable } from '@nestjs/common';
import { HttpService } from '@nestjs/axios';
import { catchError, firstValueFrom } from 'rxjs';
import { AxiosError } from 'axios';
import * as process from 'node:process';

@Injectable()
export class FetchService {
  constructor(private readonly httpService: HttpService) {}

  async getOhangaron() {
    const { data } = await firstValueFrom(
      this.httpService
        .get<string>(
          process.env['OHANGARON_CURRENT']!,
        )
        .pipe(
          catchError((error: AxiosError) => {
            throw 'An error happened!';
          }),
        ),
    );
    return data;
  }
}
