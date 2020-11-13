// Angular libs
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';

// other libs
import { TranslateModule } from '@ngx-translate/core';

// services
import { ApiService } from './services/api.service';

@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    HttpClientModule,
    TranslateModule
  ],
  exports: [
    CommonModule,
    HttpClientModule,
    TranslateModule
  ],
  providers: [
    ApiService
  ]
})
export class SharedModule { }
