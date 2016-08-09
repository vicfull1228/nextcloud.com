<?php
// Strings used throughout Nextcloud.org.

/* VERSIONS */
$VERSIONS_SERVER_MAJOR_STABLE = '9';
$VERSIONS_SERVER_FULL_STABLE = '9.0.53';
$VERSIONS_SERVER_MAJOR_DEVELOPMENT = '10';
$VERSIONS_SERVER_MAJOR_DEV_DOCS = '9'; // Used in dev docs links
$VERSIONS_CLIENT_DESKTOP_STABLE_FULL = '2.2.3';
$VERSIONS_CLIENT_DESKTOP_STABLE_SHORT = '2.2'; // For use in documentation link

/* DOCUMENTATION */
$DOCUMENTATION_BASE = 'https://docs.nextcloud.org';
$DOCUMENTATION_DEVELOPER = $DOCUMENTATION_BASE.'/server/'.$VERSIONS_SERVER_MAJOR_DEV_DOCS.'/developer_manual/';
$DOCUMENTATION_ADMIN = $DOCUMENTATION_BASE.'/server/'.$VERSIONS_SERVER_MAJOR_STABLE.'/admin_manual/';
$DOCUMENTATION_USER = $DOCUMENTATION_BASE.'/server/'.$VERSIONS_SERVER_MAJOR_STABLE.'/user_manual/';
$DOCUMENTATION_CLIENT_DESKTOP = $DOCUMENTATION_BASE.'/desktop/'.$VERSIONS_CLIENT_DESKTOP_STABLE_SHORT;
// $VERSIONS_VM = '9.0.2-1.1-201605101540';
// $VM_UBUNTU_RELEASE = '14.04';

/* DOWNLOADS */
$NEXTCLOUD_GPG = 'https://nextcloud.com/nextcloud.asc';

// Desktop client stable
$DOWNLOAD_CLIENT_DESKTOP_BASE = 'https://download.owncloud.com/desktop/stable/';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN = $DOWNLOAD_CLIENT_DESKTOP_BASE.'ownCloud-2.2.3.6307-setup.exe';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC = $DOWNLOAD_CLIENT_DESKTOP_BASE.'ownCloud-2.2.3.3601.pkg';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX = 'https://software.opensuse.org/download/package?project=isv:ownCloud:desktop&package=owncloud-client';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES = $DOWNLOAD_CLIENT_DESKTOP_BASE.'owncloudclient-2.2.3.tar.xz';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES_PGP = $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES.'.asc';

// Desktop client testing
$VERSIONS_CLIENT_DESKTOP_TESTING = '';
$DOWNLOAD_CLIENT_DESKTOP_TEST_BASE= 'https://download.nextcloud.com/desktop/testing/';
$DOWNLOAD_CLIENT_DESKTOP_TEST_WIN = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'Nextcloud-2.2.0.6069rc1-setup.exe';
$DOWNLOAD_CLIENT_DESKTOP_TEST_MAC = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'Nextcloud-2.2.0.3346rc1.pkg';
$DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX = 'https://software.opensuse.org/download/package?project=isv:Nextcloud:community:testing&package=nextcloud-client';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_WIN = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'testpilotcloud-2.2.0.6070rc1-setup.exe';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_MAC = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'testpilotcloud-2.2.0.3347rc1.pkg';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_LINUX = 'https://software.opensuse.org/download/package?project=isv:Nextcloud:community:testing&package=testpilotcloud-client';
$DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES= $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'nextcloudclient-2.2.0rc1.tar.xz';
$DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP = $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES.'.asc';

// Server
$DOWNLOAD_SERVER_BASE = 'https://download.nextcloud.com/server/';

// stable
$DOWNLOAD_SERVER_STABLE_TAR = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2';
$DOWNLOAD_SERVER_STABLE_TAR_MD5 = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.md5';
$DOWNLOAD_SERVER_STABLE_TAR_SHA256 = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.sha256';
$DOWNLOAD_SERVER_STABLE_TAR_PGP = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.asc';
$DOWNLOAD_SERVER_PACKAGES_STABLE = 'https://download.nextcloud.com/download/repositories/stable/nextcloud';
$DOWNLOAD_SERVER_STABLE_ZIP = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip';
$DOWNLOAD_SERVER_STABLE_ZIP_MD5 = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.md5';
$DOWNLOAD_SERVER_STABLE_ZIP_SHA256 = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.sha256';
$DOWNLOAD_SERVER_STABLE_ZIP_PGP = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.asc';

// Daily
$DOWNLOAD_SERVER_DAILY_TAR = $DOWNLOAD_SERVER_BASE.'daily/latest.tar.bz2';
$DOWNLOAD_SERVER_DAILY_TAR_MD5 = $DOWNLOAD_SERVER_BASE.'daily/latest.tar.bz2.md5';
$DOWNLOAD_SERVER_PACKAGES_DAILY = 'https://download.nextcloud.com/download/repositories/nightly/nextcloud';

// Testing
$DOWNLOAD_SERVER_PACKAGES_TESTING = 'https://download.nextcloud.com/server/prereleases/';
$SERVER_TESTING_VERSION ='10.0 beta';
$DOWNLOAD_SERVER_TAR_TESTING ='https://download.nextcloud.com/server/prereleases/nextcloud-10.0beta.tar.bz2';
$DOWNLOAD_SERVER_ZIP_TESTING ='https://download.nextcloud.com/server/prereleases/nextcloud-10.0beta.zip';

// web installer
$DOWNLOAD_SERVER_WEB_INSTALLER = 'https://download.nextcloud.com/download/community/setup-nextcloud.php';

// VM
$DOWNLOAD_VM_BASE = 'http://download.nextcloud.com/production/vm/';

$DOWNLOAD_VM_OVA   = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.ova.zip';
$DOWNLOAD_VM_QCOW2 = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.qcow2.zip';
$DOWNLOAD_VM_RAW   = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.raw.zip';
$DOWNLOAD_VM_VHDX  = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.vhdx.zip';
$DOWNLOAD_VM_VMDK  = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.vmdk.zip';
$DOWNLOAD_VM_VMX   = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.vmx.zip';

// Mobile clients
$DOWNLOAD_CLIENT_MOBILE_IOS = 'https://itunes.apple.com/app/id1125420102';
$DOWNLOAD_CLIENT_MOBILE_ANDROID = 'https://play.google.com/store/apps/details?id=com.nextcloud.client';
$DOWNLOAD_CLIENT_MOBILE_ANDROID_BETA = 'https://play.google.com/apps/testing/com.nextcloud.client';
$DOWNLOAD_CLIENT_MOBILE_BLACKBERRY = 'https://appworld.blackberry.com/webstore/content/59955931/';
$DOWNLOAD_CLIENT_MOBILE_FDROID = 'https://f-droid.org/repository/browse/?fdfilter=com.nextcloud';
$DOWNLOAD_CLIENT_MOBILE_FDROID_BETA = 'https://f-droid.org/repository/browse/?fdid=com.nextcloud.android.beta';
$DOWNLOAD_CLIENT_MOBILE_AMAZON = 'https://www.amazon.com/Nextcloud-Inc/dp/B00944PQMK';
?>
