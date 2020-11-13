import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor(private http: HttpClient) { }

  github = 'https://api.github.com/repos/morelo-network/';

  getMoreloRelease(){
    return this.http.get(this.github + 'morelo/releases');
  }

  getWalletRelease(){
    return this.http.get(this.github + 'morelo-electron-wallet/releases');
  }

  getLanguageList(){
    return this.http.get('assets/i18n/language-list.json');
  }
}
