import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { HeaderComponent } from './parts/header/header.component';
import { FooterComponent } from './parts/footer/footer.component';
import { HomeComponent } from './parts/home/home.component';
import { FeaturesComponent } from './parts/features/features.component';
import { DownloadComponent } from './parts/download/download.component';
import { ContactComponent } from './parts/contact/contact.component';
import { AboutComponent } from './parts/about/about.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    HomeComponent,
    FeaturesComponent,
    DownloadComponent,
    ContactComponent,
    AboutComponent
  ],
  imports: [
    BrowserModule,
    NgbModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
