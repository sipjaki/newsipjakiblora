PERINTAH UNTUK MENCARI ARTISAN THINKER RELASI TABLE $QA


App\Models\Qa::first();




> $user->statusadmin

   WARNING  Undefined variable $user in D:\01. SIPJAKI KABUPATEN BANDUNG BARATeval()'d code.


   WARNING  Attempt to read property "statusadmin" on null in D:\01. SIPJAKI KABUPATEN BANDUNG BARATeval()'d code.

= null

> $user = App\Models\User::first();
= App\Models\User {#6182
    id: 1,
    statusadmin_id: 1,
    name: "Sigit Septiadi",
    username: "Sigit",
    phone_number: null,
    email: "sigitseptiadi1@gmail.com",
    avatar: null,
    email_verified_at: null,
    #password: "$2y$12$tataDPkWtGA6tWR0SMWAOOYGV2CNODupe2MgAVwF/15OAzEsklmqC",
    deleted_at: null,
    #remember_token: null,
    created_at: "2024-09-13 02:57:45",
    updated_at: "2024-09-13 02:57:45",
  }

> $user =$user->statusadmin
= App\Models\statusadmin {#6181
    id: 1,
    status: "super_admin",
    deleted_at: null,
    created_at: "2024-09-13 02:57:46",
    updated_at: "2024-09-13 02:57:46",
  }

> $qa = App\Models\qa::first();
= App\Models\qa {#6162
    id: 1,
    qasebagai_id: 2,
    qapertanyaan_id: 8,
    nama_lengkap: "Marina Stanton",
    email: "madaline.nicolas@example.org",
    telepon: "+1 (380) 439-2707",
    deleted_at: null,
    created_at: "2024-09-13 02:57:50",
    updated_at: "2024-09-13 02:57:50",
  }

> $qa->sebagai
= null

> $qa->qasebagai
= App\Models\qasebagai {#6193
    id: 2,
    sebagai: "Pengawas",
    deleted_at: null,
    created_at: "2024-09-13 02:57:50",
    updated_at: "2024-09-13 02:57:50",
  }
