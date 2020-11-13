// Angular libs
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

// component imports
import { StatsComponent } from './stats.component';

// shared module
import { SharedModule } from '../shared/shared.module';

// routes
const routes: Routes = [
  {
    path: '',
    component: StatsComponent
  }
];

@NgModule({
  declarations: [StatsComponent],
  imports: [
    SharedModule,
    RouterModule.forChild(routes)
  ]
})
export class StatsModule { }
