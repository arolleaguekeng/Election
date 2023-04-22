import { Injectable } from '@angular/core';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class ElectionService {

  constructor(
    private router: Router
  ) { }

  openHomePage() {
    this.router.navigate([`home`])
  }

  openElectionPage() {
    this.router.navigate([`election`])
  }

  
}
