import { Injectable } from '@nestjs/common';
import { RedisService } from './redis/redis.service';
import * as process from 'node:process';

@Injectable()
export class AppService {
  constructor(private redisService: RedisService) {}

  async getAndijon29() {
    return this.redisService.getGesData(process.env.KEY_ANDIJON_29!);
  }

  async getAndijon36() {
    return this.redisService.getGesData(process.env.KEY_ANDIJON_36!);
  }

  async getAndijonKudash() {
    return this.redisService.getGesData(process.env.KEY_ANDIJON_KUDASH!);
  }

  async getChirchiq() {
    return this.redisService.getGesData(process.env.KEY_CHIRCHIQ!);
  }

  async getFarxod16() {
    return this.redisService.getGesData(process.env.KEY_FARXOD_16!);
  }

  async getFarxodZomin() {
    return this.redisService.getGesData(process.env.KEY_FARXOD_ZOMIN!);
  }

  async getKFK() {
    return this.redisService.getGesData(process.env.KEY_KFK!);
  }

  async getOxangaron() {
    return this.redisService.getGesData(process.env.KEY_OXANGARON!);
  }

  async getQamchiq() {
    return this.redisService.getGesData(process.env.KEY_QAMCHIQ!);
  }

  async getQodiriya() {
    return this.redisService.getGesData(process.env.KEY_QODIRIYA!);
  }

  async getQuyiBuzsuv() {
    return this.redisService.getGesData(process.env.KEY_QUYI_BUZSUV!);
  }

  async getSamarqand() {
    return this.redisService.getGesData(process.env.KEY_SAMARQAND!);
  }

  async getShaxrixon() {
    return this.redisService.getGesData(process.env.KEY_SHAXRIXON!);
  }

  async getToshkent() {
    return this.redisService.getGesData(process.env.KEY_TOSHKENT!);
  }

  async getTupolang() {
    return this.redisService.getGesData(process.env.KEY_TUPOLANG!);
  }

  async getUrtaChirchiq() {
    return this.redisService.getGesData(process.env.KEY_URTA_CHIRCHIQ!);
  }

  async getXisorak() {
    return this.redisService.getGesData(process.env.KEY_XISORAK!);
  }


  // async getData() {
  //   let dataFromRedis = await this.cacheManager.get<Characteristic>('site');
  //   if (dataFromRedis) {
  //     return dataFromRedis;
  //   } else {
  //     return this.updateData();
  //   }
  // }
  //
  // @Cron('0 * * * * *')
  // async updateData() {
  //   const ohangaron = await this.setupOhangaron();
  //
  //   await this.cacheManager.set<Characteristic>('site', ohangaron);
  //
  //   return ohangaron;
  // }
  //
  // // Setup region
  //
  // private setupOhangaron() {
  //   return this.withErrorHandling(async () => {
  //     const data = await this.fetchService.getOhangaron();
  //
  //     const map = this.setDataMap(data);
  //
  //     const ges35 = this.setupGes35(map);
  //     const ertosh = this.setupErtosh(map);
  //
  //     return this.calculateRegion([ges35, ertosh]);
  //   });
  // }
  //
  // // Setup GES
  //
  // private setupGes35(map: Map<string, number>): Characteristic {
  //   const on693Out = Math.min((map.get('G693')! * 21000) / this.CONST, 0);
  //   const on670Out = Math.min((map.get('G670')! * 21000) / this.CONST, 0);
  //   const on693In = Math.max((map.get('G693')! * 21000) / this.CONST, 0);
  //   const on670In = Math.max((map.get('G670')! * 21000) / this.CONST, 0);
  //
  //   const on53 = (map.get('G53')! * 21000) / this.CONST;
  //   const on55 = (map.get('G55')! * 21000) / this.CONST;
  //   const on293 = (map.get('G293')! * 21000) / this.CONST;
  //   const on295 = (map.get('G295')! * 21000) / this.CONST;
  //   const on453 = (map.get('G453')! * 4000) / this.CONST;
  //   const on455 = (map.get('G455')! * 4000) / this.CONST;
  //
  //   const on13 = (map.get('G13')! * 4200) / this.KVT;
  //   const on333 = (map.get('G333')! * 4200) / this.KVT;
  //   const on373 = (map.get('G373')! * 2100) / this.KVT;
  //   const on572 = (map.get('G572')! * 1000) / this.KVT;
  //
  //   const ges35Active = on53 + on293 + on453;
  //   const ges35Reactive = on55 + on295 + on455;
  //   const ges35ActiveOut = on693Out + on670Out;
  //   const ges35ActiveIn = on693In + on670In;
  //   const ges35OwnNeeds = on13 + on333 + on572 + on373;
  //   const ges35True =
  //     (map.get('G53')! > 0 ? 1 : 0) +
  //     (map.get('G293')! > 0 ? 1 : 0) +
  //     (map.get('G453')! > 0 ? 1 : 0);
  //   const ges35False =
  //     (map.get('G53')! <= 0 ? 1 : 0) +
  //     (map.get('G293')! <= 0 ? 1 : 0) +
  //     (map.get('G453')! <= 0 ? 1 : 0);
  //
  //   return {
  //     active: ges35Active,
  //     reactive: ges35Reactive,
  //     activeIn: ges35ActiveIn,
  //     activeOut: ges35ActiveOut,
  //     ownNeeds: ges35OwnNeeds,
  //     inWork: ges35True,
  //     pending: ges35False,
  //     inRepair: 0,
  //   };
  // }
  //
  // private setupErtosh(map: Map<string, number>): Characteristic {
  //   const active = ((map.get('G93')! + map.get('G133')!) * 1500) / this.CONST;
  //   const reactive = ((map.get('G95')! + map.get('G135')!) * 1500) / this.CONST;
  //   const activeIn =
  //     ((map.get('G601')! + map.get('G641')!) * 1800) / this.CONST;
  //   const activeOut =
  //     ((map.get('G600')! + map.get('G640')!) * 1800) / this.CONST;
  //   const ownNeeds = ((map.get('G173')! + map.get('G213')!) * 100) / this.KVT;
  //   const inWork =
  //     (map.get('G93')! > 0 ? 1 : 0) + (map.get('G133')! > 0 ? 1 : 0);
  //   const pending =
  //     (map.get('G93')! <= 0 ? 1 : 0) + (map.get('G133')! <= 0 ? 1 : 0);
  //
  //   const inRepair = 1;
  //
  //   return {
  //     active: active,
  //     reactive: reactive,
  //     activeIn: activeIn,
  //     activeOut: activeOut,
  //     ownNeeds: ownNeeds,
  //     inWork: inWork,
  //     pending: pending - inRepair,
  //     inRepair: inRepair,
  //   };
  // }
  //
  // // Other functions
  //
  // private setDataMap(response: string) {
  //   // split lines and remove first line (labels)
  //   const values = response.split('\r\n').slice(1);
  //   return values.reduce((map, item) => {
  //     const split = item.split(',');
  //     const id = split[0].trim();
  //     // set id and value
  //     if (id.startsWith('G')) {
  //       map.set(id, parseFloat(split[2].trim()));
  //     }
  //     return map;
  //   }, new Map<string, number>());
  // }
  //
  // private calculateRegion(array: Array<Characteristic>) {
  //   return array.reduce((acc, item) => {
  //     acc.active += item.active; // Суммируем active
  //     acc.reactive += item.reactive; // Суммируем reactive
  //     acc.ownNeeds += item.ownNeeds; // Суммируем reactive
  //     acc.activeIn += item.activeIn; // Суммируем reactive
  //     acc.activeOut += item.activeOut; // Суммируем reactive
  //     acc.inWork += item.inWork; // Суммируем reactive
  //     acc.pending += item.pending; // Суммируем reactive
  //     acc.inRepair += item.inRepair; // Суммируем inWork
  //     return acc;
  //   });
  // }
  //
  // private async withErrorHandling(logic: () => Promise<Characteristic>) {
  //   try {
  //     return await logic(); // Выполняем переданную логику
  //   } catch (e) {
  //     return {
  //       active: 0,
  //       reactive: 0,
  //       activeIn: 0,
  //       activeOut: 0,
  //       ownNeeds: 0,
  //       inWork: 0,
  //       pending: 0,
  //       inRepair: 0,
  //     } satisfies Characteristic;
  //   }
  // }
}
