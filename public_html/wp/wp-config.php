<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_lgfjceig4l');

/** MySQL database username */
define('DB_USER', 'Gbbgjmcc17W5ShR');

/** MySQL database password */
define('DB_PASSWORD', 'cyoVb8m3zpeiX8ny');

/** MySQL hostname */
define('DB_HOST', 'xiaojunhecom.domaincommysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '-r^O[rF%&*^AEexgAA?dS[rukGvXOx(!^j]s{ql]Alw&mmL?Ejf}_=[h)D@Z_z&gQi-j-_ACjdf($lN;iQ](Y]RgD_%gMz+YOSO<FS_XXxecnLxy|ygVhBlWAzT++X&L');
define('SECURE_AUTH_KEY', '/&][W)=iFTYYiP/SJFKiV_]DnE;i|dZ>+hHKvPxvUcKJZiQhZ--q);ZjasBhjf&?=t]RLT>uYHn-wI^aK^<kP]bM{Tg-!_mWXl[q_EDmEB_x]eWpynxXo$F(SG;SELFy');
define('LOGGED_IN_KEY', '(<kJ?_^k(HKJpnR{iN{T[I=<*tjI>%T;u]oMN|@IwMIlX^{i@BndV^snZ&vmcBj}[tXOFPe(jLTSMU>GeNmWxYgK{y=hkNrTe(GEs/Xb)P*RRR&u<mz[Ds{KKiYncCA%');
define('NONCE_KEY', '-]IIRvvKfCVowWs]!uml*WiNdS>C+czySu!Z)&ENMN@t&JOfoR=FN-!&sFRs+uC-ed;$q<r/?Hg_os>}[YSY-a*>=jvd<NDe]C;%(Vk}WB(QKVb^/<]G+t<P)$wW[Bmu');
define('AUTH_SALT', 'bd=y&HZ%NPW-RmObgv|;R+qVlSFrFC+PZ(Ab)!Nlw%-uCV-ZbZME<{tvf;isCILH)VowmY+vv[%Jth=^CMBcW{{A>p|u<o@+oR^v>tUP&q+hdm}(f_L/vqt_M<]C{FJR');
define('SECURE_AUTH_SALT', ')RTp^_Rq<AF/mFIjH@!bjO)&mzscCEd!sFx>a!W@N($[UIETHWPNtNb+{_j/jO[hIw?x/Rdkc=Ai|mCng>H+ezsUNrrBI;/G-Gw]jbeH*K]kT&zJL@U[QghJzoa@u$W*');
define('LOGGED_IN_SALT', 't]DbgsvdQ!Rfsoj(Tyia<ksy^^}|L<*bOjPRONKh]%@b&DjMGkiw=dd&f=RZJde%YkndJjH(e_*ImN/!!cLE)!/Yg|p&iQgSh|K^Ixu(qA[l=eyq^=O<^;GHjIF{_>L+');
define('NONCE_SALT', '<!iNE/%^UV{Of/Zwrnpz(hDx{hPv&@]hl$v;_z_pFACUr$OZiCx_uH{Rqg)P]iI?&k$(O*V*F}}_Db}$|Jhe}$<uofa&sLATLMpoSTwiE}c>OdEn*kKe*=qZ@}pO>qN@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_nmlj_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
} */
