import { Injectable } from '@nestjs/common';
import { FetchService } from './fetch.service';

@Injectable()
export class AppService {
  constructor(private fetchService: FetchService) {}

  getHello(): string {
    return 'Hello World!';
  }

  async getData() {
    const data = await this.fetchService.getOhangaron();

    const values = data.split('\r\n').slice(1);
    const dataMap = this.setDataMap(values);

    console.log(dataMap);
  }

  private setDataMap(values: string[]) {
    return values.reduce((map, item) => {
      const split = item.split(',');
      const id = split[0].trim();
      map.set(id, split[2]);
      return map;
    }, new Map<string, string>());
  }
}
