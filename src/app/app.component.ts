import { Component } from '@angular/core';
import { TranslateService } from '@ngx-translate/core';
import { ApiService } from './shared/services/api.service';
import { map } from 'rxjs/operators';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {

  constructor(public translate: TranslateService, private api: ApiService) {
    // Language list getter
    this.api.getLanguageList().pipe(
      map((res: any) => res.languages.map(lang => lang.abb))
    ).subscribe(res => {
      translate.addLangs(res);
      translate.setDefaultLang('en');

      // Simple system for checking and loading previous language choice from localstorage
      if (localStorage.getItem('lang') === null) {
        const browserLang = translate.getBrowserLang();
        translate.use(translate.getLangs().includes(browserLang) ? browserLang : 'en');
      } else {
        translate.use(localStorage.getItem('lang'));
      }
    });
  }
}
