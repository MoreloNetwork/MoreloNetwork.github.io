import { Component, OnInit } from '@angular/core';
import { TranslateService } from '@ngx-translate/core';
import { ScrollService } from 'src/app/shared/services/scroll.service';

@Component({
  selector: 'app-timeline',
  templateUrl: './timeline.component.html',
  styleUrls: ['./timeline.component.scss']
})
export class TimelineComponent implements OnInit {

  numberOfElements: any;
  selected = 0;

  constructor(public translate: TranslateService, public scrl: ScrollService) {
    // get number of elements
    translate.get('timeline.title').subscribe(res => {
      this.numberOfElements = Array.from(Object.entries(res));
    });
  }

  ngOnInit(): void {
  }

  setSelected(id: number) {
    this.selected = id;
  }

}
