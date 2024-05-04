import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'squelette';

  loading: boolean = false

  sendMail() {
     console.log('sendmail');

}
}
