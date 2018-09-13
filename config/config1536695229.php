<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);

$conf['settings']['app.title'] = 'Komatsu Event Management System';
$conf['settings']['default.timezone'] = 'America/Chicago';
$conf['settings']['allow.self.registration'] = 'true';
$conf['settings']['admin.email'] = 'zachary.peters@mining.komatsu';
$conf['settings']['admin.email.name'] = 'KEMS Administrator';
$conf['settings']['default.page.size'] = '50';
$conf['settings']['enable.email'] = 'true';
$conf['settings']['default.language'] = 'en_us';
$conf['settings']['script.url'] = 'http://komatsuevents.info/Web';
$conf['settings']['image.upload.directory'] = 'Web/uploads/images';
$conf['settings']['image.upload.url'] = 'uploads/images';
$conf['settings']['cache.templates'] = 'false';
$conf['settings']['use.local.js.libs'] = 'false';
$conf['settings']['registration.captcha.enabled'] = 'false';
$conf['settings']['registration.require.email.activation'] = 'false';
$conf['settings']['registration.auto.subscribe.email'] = 'true';
$conf['settings']['registration.notify.admin'] = 'true';
$conf['settings']['inactivity.timeout'] = '60';
$conf['settings']['name.format'] = '{first} {last}';
$conf['settings']['css.extension.file'] = '';
$conf['settings']['disable.password.reset'] = 'false';
$conf['settings']['home.url'] = '';
$conf['settings']['logout.url'] = '';
$conf['settings']['default.homepage'] = '1';
$conf['settings']['schedule']['use.per.user.colors'] = 'false';
$conf['settings']['schedule']['show.inaccessible.resources'] = 'true';
$conf['settings']['schedule']['reservation.label'] = '{title}';
$conf['settings']['schedule']['hide.blocked.periods'] = 'false';
$conf['settings']['ics']['subscription.key'] = '28c681e99cf46372ad98';
$conf['settings']['privacy']['view.schedules'] = 'true';
$conf['settings']['privacy']['view.reservations'] = 'true';
$conf['settings']['privacy']['hide.user.details'] = 'false';
$conf['settings']['privacy']['hide.reservation.details'] = 'false';
$conf['settings']['privacy']['allow.guest.reservations'] = 'false';
$conf['settings']['reservation']['start.time.constraint'] = 'future';
$conf['settings']['reservation']['updates.require.approval'] = 'false';
$conf['settings']['reservation']['prevent.participation'] = 'false';
$conf['settings']['reservation']['prevent.recurrence'] = 'false';
$conf['settings']['reservation']['enable.reminders'] = 'false';
$conf['settings']['reservation']['allow.guest.participation'] = 'false';
$conf['settings']['reservation']['allow.wait.list'] = 'false';
$conf['settings']['reservation']['checkin.minutes.prior'] = '5';
$conf['settings']['reservation']['default.start.reminder'] = '';
$conf['settings']['reservation']['default.end.reminder'] = '';
$conf['settings']['reservation']['title.required'] = 'false';
$conf['settings']['reservation']['description.required'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.add'] = 'true';
$conf['settings']['reservation.notify']['resource.admin.update'] = 'true';
$conf['settings']['reservation.notify']['resource.admin.delete'] = 'true';
$conf['settings']['reservation.notify']['resource.admin.approval'] = 'false';
$conf['settings']['reservation.notify']['application.admin.add'] = 'false';
$conf['settings']['reservation.notify']['application.admin.update'] = 'false';
$conf['settings']['reservation.notify']['application.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['application.admin.approval'] = 'false';
$conf['settings']['reservation.notify']['group.admin.add'] = 'false';
$conf['settings']['reservation.notify']['group.admin.update'] = 'false';
$conf['settings']['reservation.notify']['group.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['group.admin.approval'] = 'false';
$conf['settings']['uploads']['enable.reservation.attachments'] = 'true';
$conf['settings']['uploads']['reservation.attachment.path'] = 'uploads/reservation';
$conf['settings']['uploads']['reservation.attachment.extensions'] = 'txt,jpg,gif,png,doc,docx,pdf,xls,xlsx,ppt,pptx,csv';
$conf['settings']['database']['type'] = 'mysql';
$conf['settings']['database']['user'] = 'zackpete_me';
$conf['settings']['database']['password'] = 'theMain!2018';
$conf['settings']['database']['hostspec'] = '127.0.0.1';
$conf['settings']['database']['name'] = 'zackpete_bookedscheduler';
$conf['settings']['phpmailer']['mailer'] = 'mail';
$conf['settings']['phpmailer']['smtp.host'] = 'host194.hostmonster.com';
$conf['settings']['phpmailer']['smtp.port'] = '465';
$conf['settings']['phpmailer']['smtp.secure'] = 'ssl';
$conf['settings']['phpmailer']['smtp.auth'] = 'true';
$conf['settings']['phpmailer']['smtp.username'] = 'admin@komatsuevents.info';
$conf['settings']['phpmailer']['smtp.password'] = '7IhFw5&E';
$conf['settings']['phpmailer']['sendmail.path'] = '/usr/sbin/sendmail';
$conf['settings']['phpmailer']['smtp.debug'] = 'true';
$conf['settings']['plugins']['Authentication'] = '';
$conf['settings']['plugins']['Authorization'] = '';
$conf['settings']['plugins']['Permission'] = '';
$conf['settings']['plugins']['PostRegistration'] = '';
$conf['settings']['plugins']['PreReservation'] = '';
$conf['settings']['plugins']['PostReservation'] = '';
$conf['settings']['install.password'] = 'inStall!2018';
$conf['settings']['pages']['enable.configuration'] = 'true';
$conf['settings']['api']['enabled'] = 'false';
$conf['settings']['recaptcha']['enabled'] = 'false';
$conf['settings']['recaptcha']['public.key'] = '';
$conf['settings']['recaptcha']['private.key'] = '';
$conf['settings']['email']['default.from.address'] = 'admin@komatsuevents.info';
$conf['settings']['email']['default.from.name'] = 'KEMS Administrator';
$conf['settings']['reports']['allow.all.users'] = 'false';
$conf['settings']['password']['minimum.letters'] = '6';
$conf['settings']['password']['minimum.numbers'] = '0';
$conf['settings']['password']['upper.and.lower'] = 'false';
$conf['settings']['reservation.labels']['ics.summary'] = '{title}';
$conf['settings']['reservation.labels']['ics.my.summary'] = '{title}';
$conf['settings']['reservation.labels']['rss.description'] = '<div><span>Start</span> {startdate}</div><div><span>End</span> {enddate}</div><div><span>Organizer</span> {name}</div><div><span>Description</span> {description}</div>';
$conf['settings']['reservation.labels']['my.calendar'] = '{resourcename} {title}';
$conf['settings']['reservation.labels']['resource.calendar'] = '{title}';
$conf['settings']['reservation.labels']['reservation.popup'] = '';
$conf['settings']['security']['security.headers'] = 'true';
$conf['settings']['security']['security.strict-transport'] = 'true';
$conf['settings']['security']['security.x-frame'] = 'deny';
$conf['settings']['security']['security.x-xss'] = '1; mode=block';
$conf['settings']['security']['security.x-content-type'] = 'nosniff';
$conf['settings']['security']['security.content-security-policy'] = '';
$conf['settings']['google.analytics']['tracking.id'] = '';
$conf['settings']['authentication']['allow.facebook.login'] = 'false';
$conf['settings']['authentication']['allow.google.login'] = 'false';
$conf['settings']['authentication']['required.email.domains'] = '';
$conf['settings']['authentication']['hide.booked.login.prompt'] = 'false';
$conf['settings']['authentication']['captcha.on.login'] = 'false';
$conf['settings']['credits']['enabled'] = 'false';
$conf['settings']['credits']['allow.purchase'] = 'false';
$conf['settings']['slack']['token'] = '';
?>