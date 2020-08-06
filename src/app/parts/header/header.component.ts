import { Component, OnInit } from '@angular/core';
import { TranslateService } from '@ngx-translate/core';
import { ScrollService } from 'src/app/services/scroll.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {

  // Array of supported languages
  // It could be made programatically, but it introduces issue with full language name
  public languages: Array<any> = [
    {name: 'English', abb: 'en'},
    // {name: 'Deutsch', abb: 'de'},
    {name: 'Español', abb: 'es'},
    // {name: 'Français', abb: 'fr'},
    // {name: 'Italiano', abb: 'it'},
    // {name: '日本の', abb: 'ja', flag: 'jp'},
    {name: 'Polski', abb: 'pl'},
    // {name: 'Português', abb: 'pt'},
    // {name: 'русский', abb: 'ru'},
    // {name: '中国', abb: 'zh'},
  ];

  selectedLang: any;

  constructor(public translate: TranslateService, public scrl: ScrollService) {
  }

  ngOnInit(): void {
    this.updateSelected();
  }

  // update language name in label
  updateSelected() {
    this.selectedLang = this.languages.find(x => x.abb === this.translate.currentLang);
  }

  changeLanguage(lang: string) {
    // update localStorage and selected language AFTER service has updated currentLang
    this.translate.use(lang).subscribe(any => {
      localStorage.setItem('lang', lang);
      this.updateSelected();
    });
  }

}
