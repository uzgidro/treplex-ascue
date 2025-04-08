import { Inject, Injectable } from '@nestjs/common';
import { Cache, CACHE_MANAGER } from '@nestjs/cache-manager';

@Injectable()
export class RedisService {
  constructor(@Inject(CACHE_MANAGER) private cacheManager: Cache) {}

  async getGesData(key: string) {
    return this.cacheManager.get<string>(key);
  }

  async setGesData(key: string, resource: () => Promise<string>) {
    const data = await resource();
    await this.cacheManager.set<string>(key, data, 5*60*1000);
  }
}
