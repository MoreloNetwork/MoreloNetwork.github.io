import { Component, OnInit } from '@angular/core';
import { ApiService } from 'src/app/shared/services/api.service';

@Component({
  selector: 'app-download',
  templateUrl: './download.component.html',
  styleUrls: ['./download.component.scss']
})
export class DownloadComponent implements OnInit {

  constructor(public api: ApiService) { }

  linux = false;
  windows = false;
  macos = false;
  app = false;
  deb = false;
  exe = false;

  ngOnInit(): void {
    this.api.getMoreloRelease().subscribe((data: any) => {
      // parse morelo CLI releases, iterate thru them and set flags if found
      for (const release of data){
        if (release.assets){
          for (const asset of release.assets){
            if (asset.browser_download_url.includes('linux') && !this.linux){
              this.linux = asset.browser_download_url;
            }
            else if (asset.browser_download_url.includes('windows') && !this.windows){
              this.windows = asset.browser_download_url;
            }
            else if (asset.browser_download_url.includes('apple') && !this.macos){
              this.macos = asset.browser_download_url;
            }

            if (this.linux && this.windows && this.macos){
              break;
            }
          }
        }
      }
    });

    this.api.getWalletRelease().subscribe((data: any) => {
      // parse wallet releases, iterate thru them and set flags if found
      for (const release of data){
        if (release.assets){
          for (const asset of release.assets){
            if (asset.browser_download_url.includes('AppImage') && !this.app){
              this.app = asset.browser_download_url;
            }
            else if (asset.browser_download_url.includes('deb') && !this.deb){
              this.deb = asset.browser_download_url;
            }
            else if (asset.browser_download_url.includes('exe') && !this.exe){
              this.exe = asset.browser_download_url;
            }

            if (this.app && this.deb && this.exe){
              break;
            }
          }
        }
      }
    });
  }
}
