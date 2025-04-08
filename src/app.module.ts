import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { ConfigModule } from '@nestjs/config';
import { CacheModule } from '@nestjs/cache-manager';
import { createKeyv, Keyv } from '@keyv/redis';
import { CacheableMemory } from 'cacheable';
import { ScheduleModule } from '@nestjs/schedule';
import * as process from 'node:process';
import { RedisModule } from './redis/redis.module';
import { FetchModule } from './fetch/fetch.module';

@Module({
  imports: [
    ConfigModule.forRoot({
      envFilePath: ['.env.dev', '.env.prod'],
      isGlobal: true,
    }),
    ScheduleModule.forRoot(),
    CacheModule.registerAsync({
      isGlobal: true,
      useFactory: async () => {
        return {
          stores: [
            new Keyv({
              deserialize: JSON.parse,
              serialize: JSON.stringify,
              store: new CacheableMemory({ ttl: 120000, lruSize: 5000 }),
            }),
            createKeyv(
              `redis://${process.env.REDIS_HOST!}:${process.env.REDIS_PORT!}`,
            ),
          ],
        };
      },
    }),
    RedisModule,
    FetchModule,
  ],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule {}
