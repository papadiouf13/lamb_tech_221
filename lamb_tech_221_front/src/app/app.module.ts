import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { SidebarComponent } from './layout/admin-layout/sidebar/sidebar.component';
import { AppBarComponent } from './layout/admin-layout/app-bar/app-bar.component';

@NgModule({
  declarations: [
    AppComponent,
    SidebarComponent,
    AppBarComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
