<style>


    /* Hide elemen saat layar kecil (HP) */
@media (max-width: 767.98px) {
    .hide-on-mobile {
        display: none !important;
    }
}

/* button create */

.btn-create {
  background: linear-gradient(45deg, #228B22, #d4af37);
  color: white;
  border: none;
  margin-right: 10px;
  padding: 10px 20px;
  border-radius: 15px;
  font-size: 16px;
  font-weight: 700;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: all 0.3s ease;
  text-decoration: none;
}

.btn-create:hover {
  background: white;
  color: black;
  transform: scale(1.05);
}

.icon-create {
  font-size: 18px;
}


.button-abuabu {
  background-color: #6B7280;
  color: white;
  border: none;
  padding: 10px 25px;
  border-radius: 15px;
  font-size: 14px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
}

.button-abuabu:hover {
  background-color: white;
  color: black;
}


/* brn kembali */

.btn-kembali {
    background: linear-gradient(45deg, #6c757d, #adb5bd);
    color: white;
    border: none;
    margin-right: 10px;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}

.btn-kembali:hover {
    background: white;
    color: black;
    transform: scale(1.05);
}


</style>

<style>
    table.audit {
        border-collapse: collapse;
        width: 100%;
        font-family: Arial, sans-serif;
        font-size: 13px;
    }

    table.audit th,
    table.audit td {
        border: 1px solid black;
        padding: 8px;
        vertical-align: top;
    }

    table.audit th {
        background-color: #f2f2f2;
        text-align: center;
    }



</style>

<style>
/* ============================================================
   OVERRIDE STYLE SIDEBAR – PUTIH + HIJAU KHAS BLORA
   ============================================================ */
:root {
    --blora-green:        #16A34A;
    --blora-green-dark:   #15803D;
    --blora-green-deep:   #14532D;
    --blora-green-light:  #4ADE80;
    --blora-green-bright: #22C55E;
    --blora-green-soft:   #F0FDF4;
    --blora-green-mid:    #22C55E;
    --blora-green-glow:   rgba(22, 163, 74, 0.15);
    --blora-green-glow2:  rgba(22, 163, 74, 0.08);

    --white:      #FFFFFF;
    --bg-soft:    #F8FAFC;
    --border:     #E9EDF4;
    --border-hover: #D0D8E3;
    --text-dark:  #1A2B4A;
    --text-medium:#4A5A72;
    --text-muted: #6B7A93;
    --danger:     #DC3545;
    --danger-soft:#FEF2F2;
    --danger-mid: #FECACA;
}

/* ============================================================
   SIDEBAR UTAMA – PUTIH + AKSEN HIJAU
   ============================================================ */
.app-sidebar {
    background: var(--white) !important;
    background-image: none !important;
    animation: none !important;
    color: var(--text-dark) !important;
    box-shadow: 2px 0 16px rgba(22, 163, 74, 0.04) !important;
    border-right: 1px solid var(--border) !important;

    position: relative;
    overflow: visible !important;
    display: flex !important;
    flex-direction: column !important;
    height: 100vh !important;
    min-height: 100vh !important;
    max-height: 100vh !important;
    padding: 0 !important;
}

.app-sidebar::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 4px; height: 100%;
    background: linear-gradient(180deg,
        var(--blora-green-deep)   0%,
        var(--blora-green)        25%,
        var(--blora-green-bright) 50%,
        var(--blora-green)        75%,
        var(--blora-green-deep)   100%);
    background-size: 100% 200%;
    animation: sidebarAccent 6s ease-in-out infinite;
    z-index: 2;
    pointer-events: none;
}

@keyframes sidebarAccent {
    0%, 100% { background-position: 0% 0%; }
    50%      { background-position: 0% 100%; }
}

/* ============================================================
   BRAND
   ============================================================ */
.app-sidebar .sidebar-brand {
    padding: 20px 20px 16px 20px !important;
    border-bottom: 1px solid var(--border) !important;
    flex-shrink: 0 !important;
    background: var(--white) !important;
}

.app-sidebar .brand-link {
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 10px 14px !important;
    border-radius: 14px !important;
    background: linear-gradient(135deg, var(--blora-green-soft) 0%, var(--blora-green-mid) 100%) !important;
    border: 1px solid rgba(22, 163, 74, 0.15) !important;
    text-decoration: none !important;
    transition: 0.3s ease !important;
}

.app-sidebar .brand-link:hover {
    border-color: rgba(22, 163, 74, 0.3) !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px var(--blora-green-glow) !important;
}

.app-sidebar .brand-image {
    width: 32px !important;
    height: 32px !important;
    object-fit: contain !important;
    border-radius: 8px !important;
    background: #FFFFFF !important;
    padding: 2px !important;
    opacity: 1 !important;
    box-shadow: 0 1px 4px rgba(22, 163, 74, 0.15) !important;
    transition: transform 0.3s ease !important;
}

.app-sidebar .brand-link:hover .brand-image {
    transform: scale(1.08);
}

.app-sidebar .brand-text {
    font-weight: 700 !important;
    font-size: 0.95rem !important;
    background: linear-gradient(135deg, var(--blora-green-deep) 0%, var(--blora-green) 100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    background-clip: text !important;
    letter-spacing: 0.3px;
    opacity: 1 !important;
}

/* ============================================================
   SIDEBAR WRAPPER – SCROLL
   ============================================================ */
.app-sidebar .sidebar-wrapper {
    flex: 1 1 auto !important;
    overflow-y: auto !important;
    overflow-x: hidden !important;
    -webkit-overflow-scrolling: touch !important;
    padding: 12px 12px 20px 12px !important;
    background: var(--white) !important;
    min-height: 0 !important;
    position: relative !important;

    scrollbar-width: thin !important;
    scrollbar-color: #16A34A #F0FDF4 !important;
}

.app-sidebar .sidebar-wrapper::-webkit-scrollbar {
    width: 8px !important;
    height: 8px !important;
}
.app-sidebar .sidebar-wrapper::-webkit-scrollbar-track {
    background: #F0FDF4 !important;
    border-radius: 10px !important;
}
.app-sidebar .sidebar-wrapper::-webkit-scrollbar-thumb {
    background: linear-gradient(180deg,
        #4ADE80 0%,
        #22C55E 50%,
        #16A34A 100%) !important;
    border-radius: 10px !important;
    border: 2px solid #F0FDF4 !important;
    min-height: 40px !important;
}
.app-sidebar .sidebar-wrapper::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(180deg,
        #22C55E 0%,
        #16A34A 50%,
        #15803D 100%) !important;
}
.app-sidebar .sidebar-wrapper::-webkit-scrollbar-corner {
    background: transparent !important;
}

/* ============================================================
   MENU LINK
   ============================================================ */
.app-sidebar .sidebar-menu .nav-item > .nav-link {
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 10px 14px !important;
    border-radius: 10px !important;
    color: var(--text-dark) !important;
    text-decoration: none !important;
    font-weight: 500 !important;
    font-size: 0.85rem !important;
    transition: all 0.25s ease !important;
    position: relative !important;
    cursor: pointer;
    background: transparent !important;
    border: none !important;
    width: 100% !important;
    text-align: left !important;
}

.app-sidebar .sidebar-menu .nav-item > .nav-link::before {
    content: '';
    position: absolute;
    left: 0; top: 50%;
    transform: translateY(-50%) scaleY(0);
    width: 3px; height: 60%;
    border-radius: 0 3px 3px 0;
    background: linear-gradient(180deg, var(--blora-green-light) 0%, var(--blora-green) 100%);
    transition: transform 0.3s ease;
}

.app-sidebar .sidebar-menu .nav-item > .nav-link:hover {
    background: linear-gradient(90deg, var(--blora-green-soft) 0%, transparent 100%) !important;
    color: var(--blora-green-deep) !important;
    padding-left: 18px !important;
}
.app-sidebar .sidebar-menu .nav-item > .nav-link:hover::before {
    transform: translateY(-50%) scaleY(1);
}

.app-sidebar .sidebar-menu .nav-link,
.app-sidebar .sidebar-menu .nav-link p,
.app-sidebar .sidebar-menu .nav-link span {
    color: var(--text-dark) !important;
}

.app-sidebar .sidebar-menu .nav-link p {
    margin: 0 !important;
    font-size: 0.85rem !important;
    font-weight: 500 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    width: 100% !important;
    line-height: 1.3 !important;
}

.app-sidebar .sidebar-menu .nav-link .nav-icon {
    font-size: 1.05rem !important;
    width: 22px !important;
    text-align: center !important;
    color: var(--text-muted) !important;
    transition: all 0.25s ease !important;
    flex-shrink: 0 !important;
}
.app-sidebar .sidebar-menu .nav-link:hover .nav-icon {
    color: var(--blora-green) !important;
    transform: scale(1.12);
}

.app-sidebar .sidebar-menu .nav-link .nav-arrow {
    font-size: 0.75rem !important;
    color: var(--text-muted) !important;
    transition: transform 0.3s ease !important;
    margin-left: auto !important;
}

.app-sidebar .sidebar-menu .nav-item.menu-open > .nav-link {
    background: linear-gradient(90deg, var(--blora-green-soft) 0%, transparent 100%) !important;
    color: var(--blora-green-deep) !important;
}
.app-sidebar .sidebar-menu .nav-item.menu-open > .nav-link::before {
    transform: translateY(-50%) scaleY(1);
}
.app-sidebar .sidebar-menu .nav-item.menu-open > .nav-link .nav-icon {
    color: var(--blora-green) !important;
}

/* ============================================================
   SUB-MENU
   ============================================================ */
.app-sidebar .sidebar-menu .nav-treeview {
    list-style: none !important;
}

.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link {
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 8px 12px 8px 30px !important;
    border-radius: 8px !important;
    color: var(--text-medium) !important;
    text-decoration: none !important;
    font-size: 0.8rem !important;
    font-weight: 400 !important;
    transition: all 0.25s ease !important;
    position: relative !important;
    background: transparent !important;
}

.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link:hover {
    background: var(--blora-green-soft) !important;
    color: var(--blora-green-deep) !important;
    padding-left: 34px !important;
}
.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link:hover .nav-icon {
    color: var(--blora-green) !important;
    transform: scale(1.12);
}

.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link .nav-icon {
    font-size: 0.85rem !important;
    width: 18px !important;
    text-align: center !important;
    color: var(--text-muted) !important;
    transition: all 0.25s ease !important;
    flex-shrink: 0 !important;
}

.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link p {
    color: var(--text-medium) !important;
    margin: 0 !important;
    font-size: 0.8rem !important;
    line-height: 1.35 !important;
}

.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link::before {
    content: '';
    position: absolute;
    left: 18px; top: 50%;
    transform: translateY(-50%);
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--blora-green-mid);
    transition: all 0.25s ease;
}
.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link:hover::before {
    background: var(--blora-green);
    box-shadow: 0 0 0 4px var(--blora-green-glow2);
    transform: translateY(-50%) scale(1.2);
}

.app-sidebar .sidebar-menu .nav-treeview .nav-link .nav-icon.text-warning {
    color: var(--blora-green) !important;
    opacity: 0.9;
}
.app-sidebar .sidebar-menu .nav-treeview .nav-link:hover .nav-icon.text-warning {
    color: var(--blora-green-deep) !important;
    opacity: 1;
}

/* ============================================================
   NAV HEADER
   ============================================================ */
.app-sidebar .sidebar-menu .nav-header {
    font-size: 0.68rem !important;
    font-weight: 700 !important;
    color: var(--blora-green-deep) !important;
    text-transform: uppercase !important;
    letter-spacing: 1.2px !important;
    padding: 14px 14px 6px 14px !important;
    background: transparent !important;
}

.app-sidebar .sidebar-menu .nav-header > div[style*="background:#ffa500"] {
    background: linear-gradient(90deg, var(--blora-green) 0%, transparent 100%) !important;
    opacity: 0.35 !important;
}

.app-sidebar .sidebar-menu .nav-treeview > div > p {
    background: linear-gradient(135deg, var(--blora-green-soft) 0%, var(--blora-green-mid) 100%) !important;
    color: var(--blora-green-deep) !important;
    border: 1px solid rgba(22, 163, 74, 0.15) !important;
    box-shadow: none !important;
}
.app-sidebar .sidebar-menu .nav-treeview > div > p i {
    color: var(--blora-green) !important;
}

.app-sidebar .sidebar-menu .nav-header[style*="color: red"],
.app-sidebar .sidebar-menu .nav-header[style*="color:red"] {
    color: var(--danger) !important;
}

/* ============================================================
   LOGOUT BUTTON (sidebar)
   ============================================================ */
.app-sidebar .sidebar-menu .nav-item form button.nav-link {
    background: transparent !important;
    color: var(--danger) !important;
    border: none !important;
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 10px 14px !important;
    border-radius: 10px !important;
    font-size: 0.85rem !important;
    font-weight: 600 !important;
    width: 100% !important;
    cursor: pointer !important;
    transition: all 0.25s ease !important;
    text-align: left !important;
    font-family: inherit !important;
}
.app-sidebar .sidebar-menu .nav-item form button.nav-link:hover {
    background: linear-gradient(90deg, var(--danger-soft) 0%, transparent 100%) !important;
    padding-left: 18px !important;
}
.app-sidebar .sidebar-menu .nav-item form button.nav-link i,
.app-sidebar .sidebar-menu .nav-item form button.nav-link p {
    color: var(--danger) !important;
}

/* ============================================================
   RESPONSIVE – MOBILE
   ============================================================ */
@media (max-width: 768px) {
    .app-sidebar {
        position: fixed !important;
        top: 0 !important;
        left: -280px !important;
        width: 280px !important;
        height: 100vh !important;
        max-height: 100vh !important;
        z-index: 1050 !important;
        overflow: visible !important;
        transition: left 0.3s ease !important;
    }
    .app-sidebar.active { left: 0 !important; }
    .app-sidebar .sidebar-wrapper {
        max-height: calc(100vh - 100px) !important;
    }
}

/* ============================================================
   MODAL LOGOUT – MODERN ELEGAN (MERAH, TANPA EFEK)
   ============================================================ */
.logout-modal-overlay {
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgba(15, 23, 42, 0.5);
}

.logout-modal-overlay.active {
    display: flex;
}

.logout-modal {
    background: #FFFFFF;
    border: 1px solid #E9EDF4;
    border-radius: 14px;
    width: 100%;
    max-width: 360px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.10);
}

/* --- Header --- */
.logout-modal-header {
    padding: 24px 24px 16px 24px;
    text-align: center;
    border-bottom: 1px solid #F0F0F0;
}

.logout-modal-icon {
    width: 48px;
    height: 48px;
    margin: 0 auto 12px auto;
    border-radius: 12px;
    background: #FEF2F2;
    border: 1px solid #FECACA;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #DC3545;
    font-size: 22px;
}

.logout-modal-title {
    font-size: 1rem;
    font-weight: 700;
    color: #1A2B4A;
    margin: 0 0 4px 0;
    letter-spacing: -0.2px;
}

.logout-modal-subtitle {
    font-size: 0.7rem;
    font-weight: 500;
    color: #6B7A93;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* --- Body --- */
.logout-modal-body {
    padding: 20px 24px 8px 24px;
    text-align: center;
}

.logout-modal-message {
    font-size: 0.82rem;
    color: #4A5A72;
    line-height: 1.6;
    margin: 0 0 16px 0;
}

.logout-modal-message strong {
    color: #DC3545;
    font-weight: 600;
}

.logout-user-info {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    background: #F8FAFC;
    border: 1px solid #E9EDF4;
    border-radius: 10px;
    margin-bottom: 4px;
    text-align: left;
}

.logout-user-avatar {
    width: 34px;
    height: 34px;
    border-radius: 8px;
    background: #DC3545;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    font-size: 13px;
    font-weight: 700;
    flex-shrink: 0;
}

.logout-user-detail { flex: 1; min-width: 0; }

.logout-user-name {
    font-size: 0.78rem;
    font-weight: 600;
    color: #1A2B4A;
    margin: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.logout-user-role {
    font-size: 0.65rem;
    font-weight: 500;
    color: #6B7A93;
    margin: 1px 0 0 0;
}

/* --- Footer --- */
.logout-modal-footer {
    display: flex;
    gap: 8px;
    padding: 16px 24px 20px 24px;
}

.logout-btn {
    flex: 1;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    padding: 9px 14px;
    border-radius: 8px;
    font-size: 0.78rem;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.15s ease, border-color 0.15s ease;
    border: none;
    text-decoration: none;
    font-family: inherit;
}

.logout-btn i {
    font-size: 0.85rem;
}

.logout-btn-cancel {
    background: #FFFFFF;
    color: #4A5A72;
    border: 1px solid #E9EDF4;
}

.logout-btn-cancel:hover {
    background: #F8FAFC;
    border-color: #D0D8E3;
    color: #1A2B4A;
}

.logout-btn-confirm {
    background: #DC3545;
    color: #FFFFFF;
}

.logout-btn-confirm:hover {
    background: #B02A37;
    color: #FFFFFF;
}


.logout-modal-footer { display: flex; justify-content: center; align-items: center; gap: 12px; }
/* --- Responsive --- */
@media (max-width: 480px) {
    .logout-modal {
        max-width: 92%;
        border-radius: 12px;
    }
    .logout-modal-header { padding: 20px 18px 14px 18px; }
    .logout-modal-icon { width: 42px; height: 42px; font-size: 18px; }
    .logout-modal-title { font-size: 0.92rem; }
    .logout-modal-body { padding: 16px 18px 6px 18px; }
    .logout-modal-footer {
        padding: 12px 18px 16px 18px;
        flex-direction: column;
    }
    .logout-btn { width: 100%; }
}
</style>

