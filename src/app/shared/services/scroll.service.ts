import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ScrollService {

  constructor() { }

  //Scroll element smoothly to middle-ish of viewport
  scroll(id) {
    document.getElementById(id).scrollIntoView({ behavior: 'smooth', block: 'center' });
  }
}
