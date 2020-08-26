import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { RecordEditorComponent } from './record-editor/record-editor.component';

const routes: Routes = [
  {
    path: 'record',
    component: RecordEditorComponent
  }
];

@NgModule({
  imports: [
    RouterModule.forChild(routes)
  ]
})
export class RecordsRoutingModule { }
