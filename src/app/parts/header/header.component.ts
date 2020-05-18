import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {

  // Array of supported languages
  public languages: Array<any> = [
    {name: 'English', abb: 'en', flag: 'us'},
    {name: 'Deutsch', abb: 'de', flag: 'de'},
    {name: 'Español', abb: 'es', flag: 'es'},
    {name: 'Français', abb: 'fr', flag: 'fr'},
    {name: 'Italiano', abb: 'it', flag: 'it'},
    {name: 'हिन्दी', abb: 'hi', flag: 'in'},
    {name: '日本の', abb: 'ja', flag: 'jp'},
    {name: 'Polski', abb: 'pl', flag: 'pl'},
    {name: 'Português', abb: 'pt', flag: 'pt'},
    {name: 'русский', abb: 'ru', flag: 'ru'},
    {name: '中国', abb: 'zh', flag: 'cn'},
  ];

  constructor() { }

  ngOnInit(): void {
  }

}
