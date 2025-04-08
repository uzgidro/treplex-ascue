import { Controller, Get } from '@nestjs/common';
import { AppService } from './app.service';

@Controller('api')
export class AppController {
  constructor(private appService: AppService) {}

  @Get('andijon/36')
  async getAndijon36() {
    return this.appService.getAndijon36();
  }

  @Get('andijon/29')
  async getAndijon29() {
    return this.appService.getAndijon29();
  }

  @Get('andijon/kudash')
  async getAndijonKudash() {
    return this.appService.getAndijonKudash();
  }

  @Get('chirchiq')
  async getChirchiq() {
    return this.appService.getChirchiq();
  }

  @Get('farxod/16')
  async getFarxod16() {
    return this.appService.getFarxod16();
  }

  @Get('farxod/zomin')
  async getFarxodZomin() {
    return this.appService.getFarxodZomin();
  }

  @Get('kfk')
  async getKFK() {
    return this.appService.getKFK();
  }

  @Get('oxangaron')
  async getOxangaron() {
    return this.appService.getOxangaron();
  }

  @Get('qamchiq')
  async getQamchiq() {
    return this.appService.getQamchiq();
  }

  @Get('qodiriya')
  async getQodiriya() {
    return this.appService.getQodiriya();
  }

  @Get('quyi-buzsuv')
  async getQuyiBuzsuv() {
    return this.appService.getQuyiBuzsuv();
  }

  @Get('samarqand')
  async getSamarqand() {
    return this.appService.getSamarqand();
  }

  @Get('shaxrixon')
  async getShaxrixon() {
    return this.appService.getShaxrixon();
  }

  @Get('toshkent')
  async getToshkent() {
    return this.appService.getToshkent();
  }

  @Get('tupolang')
  async getTupolang() {
    return this.appService.getTupolang();
  }

  @Get('urta-chirchiq')
  async getUrtaChirchiq() {
    return this.appService.getUrtaChirchiq();
  }

  @Get('xisorak')
  async getXisorak() {
    return this.appService.getXisorak();
  }
}
