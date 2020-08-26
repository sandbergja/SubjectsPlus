import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormGroup, FormControl, Validators, FormArray } from '@angular/forms';

@Component({
  selector: 'sp-record-editor',
  templateUrl: './record-editor.component.html',
  styleUrls: ['./record-editor.component.css'],
  encapsulation: ViewEncapsulation.None
})
export class RecordEditorComponent implements OnInit {

  recordForm = new FormGroup({
    prefix: new FormControl(''),
    title: new FormControl('', [Validators.required]),
    alternateTitle: new FormControl(''),
    description: new FormControl(''),
    internalNotes: new FormControl(''),
    sourceType: new FormControl(''),
    subjects: new FormControl(''),
    locations: new FormArray([this.createLocation()])
  });

  constructor() { }

  ngOnInit() {
  }

  createLocation(): FormGroup {
    return new FormGroup({
      url: new FormControl(''),
      format: new FormControl(''),
      accessRestrictions: new FormControl(''),
      status: new FormControl(''),
      inAZList: new FormControl(''),
      displayNote: new FormControl(''),
      helpGuideLocation: new FormControl(''),
      formatTags: new FormControl(''),
    });
  }

}
