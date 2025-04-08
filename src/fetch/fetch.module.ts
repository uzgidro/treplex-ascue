import { Module } from '@nestjs/common';
import { FetchService } from './fetch.service';
import { HttpModule } from '@nestjs/axios';
import { RedisModule } from '../redis/redis.module';

@Module({
  imports: [HttpModule, RedisModule],
  providers: [FetchService],
  exports: [FetchService],
})
export class FetchModule {}
