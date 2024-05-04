import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable, catchError, tap, throwError } from 'rxjs';
import { environment } from 'src/environments/environment.development';
import { FormGroup } from '@angular/forms';
@Injectable({
  providedIn: 'root'
})
export abstract class AbstractService<T> {


  constructor(protected http: HttpClient) { }

  abstract uri(): string;

  create<U>(data: U): Observable<T> {
    return this.http.post<T>(`${environment.url}${this.uri()}`, data).pipe(
      tap({
        next: (res) => console.log('Ajout réussi :', res),
        error: (err) => console.error('Erreur lors de l\'ajout :', err),
        complete: () => console.log('Observable create terminé 🚀')
      }),
      catchError(this.handleError)
    );
  }

  findDonneur(id: number): Observable<T> {
    return this.http.get<T>(`${environment.url}${this.uri()}/donneur/${id}`).pipe(
      tap({
        next: (res) => console.log('Données récupérées avec succès :', res),
        error: (err) => console.error('Erreur lors de la récupération des données :', err),
        complete: () => console.log('Observable getById terminé 🚀')
      }),
      catchError(this.handleError)
    );
  }

  update<U>(id: number, data: U): Observable<T> {
    return this.http.put<T>(`${environment.url}${this.uri()}/${id}`, data).pipe(
      tap({
        next: (res) => console.log('Mise à jour réussie :', res),
        error: (err) => console.error('Erreur lors de la mise à jour :', err),
        complete: () => console.log('Observable update terminé 🚀')
      }),
      catchError(this.handleError)
    );
  }

  delete<U>(id: number): Observable<T> {
    return this.http.delete<T>(`${environment.url}${this.uri()}/${id}`).pipe(
      tap({
        next: (res) => console.log('Suppression réussie :', res),
        error: (err) => console.error('Erreur lors de la suppression :', err),
        complete: () => console.log('Observable delete terminé 🚀')
      }),
      catchError(this.handleError)
    );
  }

  validInput(name: string, formName: FormGroup) {
    const regex = /^[0-9]*$/;
    let inputValue = formName.get(name)?.value;
    if (inputValue && !regex.test(inputValue)) {
      formName.get(name)?.patchValue(inputValue.replace(/[^0-9]/g, ''));
    }
  }

  private handleError(error: HttpErrorResponse) {
    if (error.status === 0) {
      console.error('Erreur réseau : Aucune réponse du serveur.');
    } else {
      console.error(`Erreur ${error.status}: ${error.error}`);
    }
    return throwError('Une erreur est survenue, veuillez réessayer plus tard.');
  }

}
