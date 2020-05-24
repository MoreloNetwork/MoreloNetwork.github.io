import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor(private http: HttpClient) { }

  getMoreloRelease(){
    return this.http.get('https://api.github.com/repos/morelo-network/morelo/releases');
  }

  getWalletRelease(){
    return this.http.get('https://api.github.com/repos/morelo-network/morelo-electron-wallet/releases');
  }
}
