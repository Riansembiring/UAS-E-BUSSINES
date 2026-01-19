<?php
/**
 * The base configuration for WordPress
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - Informasi ini otomatis dari XAMPP ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onlinestore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 * Anda bisa mengganti ini kapan saja untuk keamanan.
 */
define( 'AUTH_KEY',         '8d+o[h;7]J=# C1{Hz8ZwP8XWSljkp{dW5&[:zg%/^|U:lw[KH8EqTyid;^[YZyZ' );
define( 'SECURE_AUTH_KEY',  'zsq_mv)*`*>y>=BQwm=p(hI[.u;Yk) #B:1@&S4K}nlHRK@@~+yLNXi(+j)5~Up,' );
define( 'LOGGED_IN_KEY',    ' [cBe%QP*n<>)RbWQUhC} rHV<Tn!5$8N@Kst].rd/iBDwx]g[O W]%WYsJGfz)b' );
define( 'NONCE_KEY',        'K6JcT-e:Gi;B8h[hhP%brKeaf,H{}e i:XRLXsP0a8<PGA(G$)Sjwb >[:srG&h}' );
define( 'AUTH_SALT',        'uH^E~{.|E>=Yoti!MIO5v|}HzV&Ix[/&;D( #`v:&c#`QP6?8ok>/O1{{#7oQ!%N' );
define( 'SECURE_AUTH_SALT', 'QDYx_@nGP(,KG*?!]&N2~216FQ=`d*Dz%zQ*m*C?au7%`Z$l;^Ud$7l^z=@0iQ U' );
define( 'LOGGED_IN_SALT',   'Ughx- c>sxvAougj%T^(<jl%wC|t]3^xJ7G1&_ah::OKD-!l+z-(vEI|*lKV UrB' );
define( 'NONCE_SALT',       'C?=01>kWBK^!R<h,u{Vo8!?Mm#VJ2#|@B}<|1q@w(KhXs~8n-6NfAQoHn:A9i_-R' );

/**#@-*/

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 */
define( 'WP_DEBUG', false );

/** * Pengaturan URL Paksa
 * Gunakan ini jika Anda memindahkan file WordPress dari folder sub (seperti /wordpress/)
 * ke folder utama agar tidak error "Not Found".
 */
define( 'WP_HOME', 'http://localhost/onlinestore' );
define( 'WP_SITEURL', 'http://localhost/onlinestore' );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';