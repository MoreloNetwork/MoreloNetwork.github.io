import { Component, OnInit } from '@angular/core';
import { TranslateService } from '@ngx-translate/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {

  // Array of supported languages
  public languages: Array<any> = [
    {name: 'English', abb: 'en', flag: 'us'},
    // {name: 'Deutsch', abb: 'de', flag: 'de'},
    // {name: 'Español', abb: 'es', flag: 'es'},
    // {name: 'Français', abb: 'fr', flag: 'fr'},
    // {name: 'Italiano', abb: 'it', flag: 'it'},
    // {name: '日本の', abb: 'ja', flag: 'jp'},
    {name: 'Polski', abb: 'pl', flag: 'pl'},
    // {name: 'Português', abb: 'pt', flag: 'pt'},
    // {name: 'русский', abb: 'ru', flag: 'ru'},
    // {name: '中国', abb: 'zh', flag: 'cn'},
  ];

  selectedLang: any;

  constructor(public translate: TranslateService) {
    this.updateSelected();
  }

  ngOnInit(): void {
  }

  // update language name in label
  updateSelected() {
    this.selectedLang = this.languages.find(x => x.abb === this.translate.currentLang);
  }

  changeLanguage(lang: string) {
    this.translate.use(lang);
    localStorage.setItem('lang', lang);
    this.updateSelected();
  }

}
