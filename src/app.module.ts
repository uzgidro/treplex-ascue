import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { HttpModule } from '@nestjs/axios';
import { FetchService } from './fetch.service';
import { ConfigModule } from '@nestjs/config';
import { EnvService } from './env.service';
import { CacheModule } from '@nestjs/cache-manager';
import { createKeyv, Keyv } from '@keyv/redis';
import { CacheableMemory } from 'cacheable';
import { ScheduleModule } from '@nestjs/schedule';

@Module({
  imports: [
    HttpModule,
    ConfigModule.forRoot(),
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
            createKeyv('redis://127.127.126.48:6379'),
          ],
        };
      },
    }),
  ],
  controllers: [AppController],
  providers: [AppService, FetchService, EnvService],
})
export class AppModule {}
