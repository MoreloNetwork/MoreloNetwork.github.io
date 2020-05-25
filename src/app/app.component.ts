import { Component } from '@angular/core';
import { TranslateService } from '@ngx-translate/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {

  constructor(public translate: TranslateService) {
    // Language list
    translate.addLangs(['en', 'pl', 'es']);
    translate.setDefaultLang('en');

    // Simple system for checking and loading language choice from localstorage
    if (localStorage.getItem('lang') === null) {
      const browserLang = translate.getBrowserLang();
      translate.use(browserLang.match(/en|pl|es/) ? browserLang : 'en');
    } else {
      translate.use(localStorage.getItem('lang'));
    }
  }
}
