import { Component, OnInit } from '@angular/core';
import { TranslateService } from '@ngx-translate/core';
import { ScrollService } from 'src/app/shared/services/scroll.service';
import { ApiService } from '../shared/services/api.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {

  // Array of supported languages
  public languages: Array<any> = [];

  selectedLang: any;

  constructor(public translate: TranslateService, public scrl: ScrollService, private api: ApiService) {
  }

  ngOnInit(): void {
    // download and parse language list
    this.api.getLanguageList().subscribe((data: any) => {
      this.languages = data.languages;
      this.updateSelected();
    });
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
