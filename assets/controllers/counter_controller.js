import { Controller } from '@hotwired/stimulus';

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
export default class extends Controller {
    connect() {
        this.element.textContent = 'voce clicou 0 vezes';
        this.count = 0;
        this.element.addEventListener('click', ()=>{
            this.count ++;
            this.element.innerHTML = this.count;
        })
    }
}
