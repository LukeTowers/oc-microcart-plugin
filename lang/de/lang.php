<?php return [
    'plugin'                   => [
        'name'        => 'MicroCart',
        'description' => 'MicroCart ist ein winziger Warenkorb für October CMS.',
    ],
    'titles'                   => [
        'orders' => [
            'show'   => 'Bestellungsdetails',
            'export' => 'Bestellungen exportieren',
        ],
    ],
    'components'               => [
        'cart' => [
            'name'        => 'Warenkorb',
            'description' => 'Listet alle Produkte im Warenkorb auf',
        ],
    ],
    'common'                   => [
        'data'                   => 'Daten',
        'email'                  => 'E-Mail',
        'payment'                => 'Zahlung',
        'payment_methods'        => 'Zahlungsmethoden',
        'payment_method'         => 'Zahlungsmethode',
        'card_info'              => 'Karteninformationen',
        'message'                => 'Nachricht',
        'name'                   => 'Name',
        'taxes'                  => 'Steuern',
        'code'                   => 'Code',
        'code_comment'           => 'Dieser Code kann zur Identifikation genutzt werden',
        'payment_provider'       => 'Zahlungsanbieter',
        'payment_gateway'        => 'Zahlungsgateway',
        'is_default'             => 'Ist Standard',
        'is_default_description' => 'Standardmässig verwenden',
        'logo'                   => 'Logo',
        'fees'                   => 'Gebühren',
        'default_currency'       => 'Standard Währungscode',
        'created_at'             => 'Erstellt',
        'products'               => 'Produkte',
        'payments'               => 'Zahlungen',
        'orders'                 => 'Bestellungen',
        'reference'              => 'Referenz',
        'please_wait'            => 'Bitte warten...',
        'failed'                 => 'Fehlgeschlagen',
        'successful'             => 'Erfolgreich',
        'session_id'             => 'Session-ID',
    ],
    'order'                    => [
        'order_number'                        => '# Bestl.',
        'invoice_number'                      => '# Rechn.',
        'payment_hash'                        => 'Bezahl-ID',
        'customer'                            => 'Kunde',
        'creation_date'                       => 'Erstellt am',
        'modification_date'                   => 'Bearbeitet am',
        'completion_date'                     => 'Abgeschlossen am',
        'credit_card'                         => 'Kreditkarte',
        'payment_status'                      => 'Bezahlstatus',
        'grand_total'                         => 'Gesamttotal',
        'billing_address'                     => 'Rechnungsadresse',
        'shipping_address'                    => 'Versandadresse',
        'currency'                            => 'Währung',
        'status'                              => 'Status',
        'email'                               => 'Email',
        'will_be_paid_later'                  => 'Wird später bezahlt',
        'shipping_address_same_as_billing'    => 'Versandadresse gleich wie Rechnungsadresse',
        'credit_card_last4_digits'            => 'Letzte 4 Ziffern',
        'tracking_number'                     => 'Trackingnummer',
        'tracking_url'                        => 'Tracking-URL',
        'tracking_shipped'                    => 'Bestellung als versendet markieren',
        'tracking_shipped_comment'            => 'Die Bestellung wird nach dem Speichern als versendet markiert',
        'tracking_completed'                  => 'Bestellung als abgeschlossen markieren',
        'tracking_completed_comment'          => 'Die Bestellung wird als abgeschlossen markiert',
        'tracking_notification'               => 'Benachrichtigung versenden',
        'tracking_notification_comment'       => 'Eine Benachrichtigung mit den Trackinginformationen wird an den Kunden gesendet',
        'shipping_fees'                       => 'Versandkosten',
        'shipping_provider'                   => 'Spediteur',
        'shipping_method'                     => 'Versandmethode',
        'card_holder_name'                    => 'Kartenhalter',
        'card_type'                           => 'Kartentyp',
        'payment_method'                      => 'Zahlungsmethode',
        'payment_gateway_used'                => 'Zahlungsgateway',
        'tax_provider'                        => 'Steuern-Anbieter',
        'lang'                                => 'Sprache',
        'refunds_amount'                      => 'Rückerstattungsbetrag',
        'adjusted_amount'                     => 'Korrigierter Betrag',
        'rebate_amount'                       => 'Rabatt',
        'total'                               => 'Total',
        'taxes_total'                         => 'Steuerntotal',
        'items_total'                         => 'Artikeltotal',
        'subtotal'                            => 'Zwischentotal',
        'taxable_total'                       => 'Steuerbares Total',
        'total_weight'                        => 'Gesamgtgewicht',
        'total_rebate_rate'                   => 'Gesamt-Rabatt',
        'notes'                               => 'Notiz',
        'custom_fields'                       => 'Benutzerdefinierte Felder',
        'shipping_enabled'                    => 'Versand aktiv',
        'payment_transaction_id'              => 'Transaktions-ID',
        'change_order_status'                 => 'Bestellungsstatus ändern',
        'change_payment_status'               => 'Bezahlstatus ändern',
        'items'                               => 'Artikel',
        'quantity'                            => 'Menge',
        'shipping_address_is_same_as_billing' => 'Rechnungs- und Versandadresse sind gleich',
        'update_shipping_state'               => 'Versandstatus aktualisieren',
        'invalid_status'                      => 'Der ausgewählte Status existiert nicht',
        'updated'                             => 'Bestellung aktualisiert',
        'deleted'                             => 'Bestellung gelöscht',
        'deleting'                            => 'Bestellung wird gelöscht...',
        'delete_confirm'                      => 'Möchtest du diese Bestellung wirklich löschen?',
        'update_invoice_number'               => 'Rechnungsnummer ändern',
        'shipped'                             => 'Versendet',
        'shipping_pending'                    => 'Versand pendent',
        'not_shipped'                         => 'Versand ausstehend',
        'data'                                => 'Bestellungsdaten',
        'total_revenue'                       => 'Gesamteinnahmen',
        'modal'                               => [
            'cancel' => 'Abbrechen',
            'update' => 'Daten aktualisieren',
        ],
        'payment_states'                      => [
            'pending_state'  => 'Zahlung ausstehend',
            'failed_state'   => 'Zahlung fehlgeschlagen',
            'refunded_state' => 'Zahlung zurückerstattet',
            'paid_state'     => 'Zahlung erhalten',
        ],
    ],
    'product'                  => [
        'name'        => 'Name',
        'description' => 'Beschreibung',
        'price'       => 'Preis',
    ],
    'tax'                      => [
        'percentage' => 'Prozent',
    ],
    'payment_method'           => [
        'label'                  => 'Anzeigetext',
        'label_comment'          => 'Dieser Text wird im Warenkorb angezeigt',
        'price'                  => 'Fixkosten',
        'price_comment'          => 'Der Betrag wird zum Total dazugerechnet',
        'fee_percentage'         => 'Prozentuale Kosten',
        'fee_percentage_comment' => 'Prozent des Gesamttotals, wird zum Total dazugerechnet',
        'fee_label'              => 'Gebührenbezeichnung',
        'fee_label_comment'      => 'Dieser Text wird dem Kunden im Warenkorb angezeigt',
    ],
    'general_settings'         => [
        'label'       => 'Allgemeine Einstellungen',
        'description' => 'Konfiguriere dein Warenkorb',
    ],
    'payment_gateway_settings' => [
        'label'       => 'Zahlungsanbieter',
        'description' => 'Einstellungen zu den Zahlungsanbietern',
        'stripe'      => [
            'api_key'                 => 'Stripe API-Key',
            'api_key_comment'         => 'Du findest diesen in deinem Stripe Dashboard',
            'publishable_key'         => 'Stripe Publishable-Key',
            'publishable_key_comment' => 'Du findest diesen in deinem Stripe Dashboard',
        ],
        'paypal'      => [
            'client_id'         => 'PayPal Client-ID',
            'secret'            => 'PayPal Secret',
            'test_mode'         => 'Test-Modus',
            'test_mode_comment' => 'Führe alle Zahlungen in der PayPal Sandbox aus.',
        ],
        'six'         => [
            'customer_id' => 'Kunden-ID',
            'terminal_id' => 'Terminal-ID',
            'api_key'     => 'API Schlüssel',
            'api_secret'  => 'API Secret',
        ],
    ],
    'payment_method_settings'  => [
        'description' => 'Zahlungsmethoden verwalten',
    ],
    'payment_log'              => [
        'payment_data'       => 'Zahlungsdaten',
        'data_comment'       => 'Diese Daten wurden vom Zahlungsanbieter zurückgegeben',
        'order_data_comment' => 'Diese Bestellungsdaten gehören zu der Zahlung',
        'message_comment'    => 'Diese Nachricht wurde vom Zahlungsanbieter zurückgegeben',
        'code_comment'       => 'Dieser Code wurde vom Zahlungsanbieter zurückgegeben',
        'failed_only'        => 'Nur fehlgeschlagene',
    ],
];