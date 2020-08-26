import { BrowserModule } from '@angular/platform-browser';
import { NgModule, Injector } from '@angular/core';

import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NavbarComponent } from './navbar/navbar.component';

import { MatIconModule, MatMenuModule, MatToolbarModule } from '@angular/material';
import { AppRoutingModule } from './app-routing.module';
import { RecordEditorComponent } from './records/record-editor/record-editor.component';
import { createCustomElement } from '@angular/elements';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    MatIconModule,
    MatMenuModule,
    MatToolbarModule,
    AppRoutingModule,
  ],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule {

}
