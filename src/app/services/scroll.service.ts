import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ScrollService {

  constructor() { }

  scroll(id) {
    document.getElementById(id).scrollIntoView({ behavior: 'smooth', block: 'center' });
  }
}
