import { NgModule } from '@angular/core';
import { RouterModule, Routes, Router, Scroll } from '@angular/router';
import { ViewportScroller } from '@angular/common';
import { filter } from 'rxjs/operators';

const routes: Routes = [
  {
    path: '',
    loadChildren: () => import('../app/home/home.module').then(m => m.HomeModule)
  },
  {
    path: 'stats',
    loadChildren: () => import('../app/stats/stats.module').then(m => m.StatsModule)
  }
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes)
  ],
  exports: [
    RouterModule
  ],
  declarations: []
})
export class AppRoutingModule {
  // https://medium.com/@qun.do19/how-to-enable-anchor-scrolling-of-angular-router-in-the-right-way-42e9b19657b5
  constructor(router: Router, viewportScroller: ViewportScroller) {
    viewportScroller.setOffset([0, 60]);
    router.events.pipe(filter(e => e instanceof Scroll)).subscribe((e: Scroll) => {
      if (e.anchor) {
        // it should ideally be replaced with some kind of oninit detection, but i dont really care anymore, 100ms timeout is fine i guess
        setTimeout(() => {
          viewportScroller.scrollToAnchor(e.anchor);
        },100);
      } else if (e.position) {
        // backward navigation
        viewportScroller.scrollToPosition(e.position);
      } else {
        // forward navigation
        viewportScroller.scrollToPosition([0, 0]);
      }
    });
  }
}
