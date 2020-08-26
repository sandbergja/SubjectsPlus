import { NgModule, Injector } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RecordsRoutingModule } from './records-routing.module';
import { RecordEditorComponent } from './record-editor/record-editor.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { MatInputModule, MatSelectModule } from '@angular/material';
import { createCustomElement } from '@angular/elements';



@NgModule({
  declarations: [
    RecordEditorComponent
  ],
  imports: [
    CommonModule,
    RecordsRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    MatInputModule,
    MatSelectModule,
  ],
  entryComponents: [RecordEditorComponent],
})
export class RecordsModule {
  constructor(injector: Injector) {
    const RecordEditorElement = createCustomElement(RecordEditorComponent, {injector});
    customElements.define('record-editor-element', RecordEditorElement);
  }
  ngDoBootstrap() {}
}
