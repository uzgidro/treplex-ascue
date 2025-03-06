import { Injectable } from '@nestjs/common';
import * as process from 'node:process';

@Injectable()
export class EnvService {

  getOhangaronCurrent() {
    return process.env.OHANGARON_CURRENT!
  }
}