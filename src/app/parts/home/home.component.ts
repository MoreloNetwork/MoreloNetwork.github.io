import { Component, OnInit } from '@angular/core';
import { trigger, transition, animate, style, state } from '@angular/animations';
import { interval } from 'rxjs';
import { ScrollService } from 'src/app/services/scroll.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss'],
  animations: [
    trigger('fade', [
      state('void', style({ opacity: 0 })),
      transition('* <=> *', [animate('1s ease-in-out')])
    ])
  ]
})
export class HomeComponent implements OnInit {

  slide = 1;

  constructor(public scrl: ScrollService) { }

  ngOnInit(): void {
    // change slide every 5 seconds
    interval(5000)
    .subscribe(() => {
      this.slide++;
      if (this.slide === 4) {
        this.slide = 1;
      }
    });
  }

}
