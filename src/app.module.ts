import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { HttpModule } from '@nestjs/axios';
import { FetchService } from './fetch.service';
import { ConfigModule } from '@nestjs/config';
import { EnvService } from './env.service';
import { CacheModule } from '@nestjs/cache-manager';
import { createKeyv, Keyv } from '@keyv/redis';
import {CacheableMemory} from 'cacheable'

@Module({
  imports: [
    HttpModule,
    ConfigModule.forRoot(),
    CacheModule.registerAsync({
      useFactory: async () => {
        return {
          stores: [
            new Keyv({
              store: new CacheableMemory({ ttl: 60000, lruSize: 5000 }),
              serialize: JSON.stringify,
              deserialize: JSON.parse
            }),
            createKeyv('redis://localhost:6379'),
          ],
        };
      },
    }),
  ],
  controllers: [AppController],
  providers: [AppService, FetchService, EnvService],
})
export class AppModule {}
