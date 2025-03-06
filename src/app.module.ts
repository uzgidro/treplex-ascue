import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { HttpModule } from '@nestjs/axios';
import { FetchService } from './fetch.service';
import { ConfigModule } from '@nestjs/config';
import { EnvService } from './env.service';

@Module({
  imports: [HttpModule, ConfigModule.forRoot({})],
  controllers: [AppController],
  providers: [AppService, FetchService, EnvService],
})
export class AppModule {}
