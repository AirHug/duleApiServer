<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Player extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImViZDM2ZGZmYzAxYWJhY2I4OTUxMGQ1OTg2MmU1NDRhODZiNDZkZWMxZTI5NmM2ZmFiYTY1ODE3ZWIxZDNlYjZiNGY2YjEwZDdiOWY5ZWRlIn0.eyJhdWQiOiIxIiwianRpIjoiZWJkMzZkZmZjMDFhYmFjYjg5NTEwZDU5ODYyZTU0NGE4NmI0NmRlYzFlMjk2YzZmYWJhNjU4MTdlYjFkM2ViNmI0ZjZiMTBkN2I5ZjllZGUiLCJpYXQiOjE1NjA3NDQ2NDYsIm5iZiI6MTU2MDc0NDY0NiwiZXhwIjoxNTkyMzY3MDQ2LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.cfcBEaLDFB0C-oSZYQkaDda0WNBoxjXx1nf7YJ1MLGwX3ZLsY44-mkdULtkCd-E_QEDAxvZlnzgGkFP3S-E0xGlfQfniSKeKaYeATwRF1DRIGZzMnfiWFJhLWInji8n6bN6eWmSSi30vIRd6Pnh4eIEwlXu_T-e2peD0CR8LyPAMTdyiC-NTObp4SJSO-U1nYgxuVcxWRJOf1UGsnmGjJUi9qWEBn9mFS_bUKVyDOT_oer1-0hSfPL9y105kMtHzkJNqmonx7-4G2O8UfaXaOTml4tyWNo3KP3byG9HXPl23Wl89foIqidrEyNhoCJ5fZ_mkPNvlRwmyEfeYkiep3PALX35TAAAi5XxRXU0ET_wGihbmIcLZlstKk8M4pcXPsOn6tdkmuM7O0jYSuLt1ydnZOP0bxGqBvuIZKgcopEjANeEq9E163Vme3BSoI0wDUKhAgifRgaHUADV0-hWmHUtfvwC6RP7AlJmHGMocEOGj__8_RuUID8ubqvvErnKMXje0UBV_lm3Qjw5fKyRR4_uEPVZas5uvUZl_kNhA3fhPitz0r25bWSyX4lsB8dcvkK5mbIM2UL_3zxAvw-HxRYCfOnOHskwbCa1eTQr7o3UoDIUjgqFUb1VjlCLlxpdFOeblS3zLa6LF_NhZflaqFiYRo8uj7J19NP4rVtPaHEQ
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'is_cheater'
    ];
}
