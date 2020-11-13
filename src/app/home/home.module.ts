// Angular libs
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

// component imports
import { HomeComponent } from './home.component';
import { FooterComponent } from './parts/footer/footer.component';
import { SliderComponent } from './parts/slider/slider.component';
import { FeaturesComponent } from './parts/features/features.component';
import { DownloadComponent } from './parts/download/download.component';
import { ContactComponent } from './parts/contact/contact.component';
import { AboutComponent } from './parts/about/about.component';
import { TimelineComponent } from './parts/timeline/timeline.component';

// shared module
import { SharedModule } from '../shared/shared.module';

// routes
const routes: Routes = [
  {
    path: '',
    component: HomeComponent
  }
];

@NgModule({
  declarations: [
    HomeComponent,
    FooterComponent,
    SliderComponent,
    FeaturesComponent,
    DownloadComponent,
    ContactComponent,
    AboutComponent,
    TimelineComponent
  ],
  imports: [
    SharedModule,
    RouterModule.forChild(routes)
  ]
})
export class HomeModule { }
