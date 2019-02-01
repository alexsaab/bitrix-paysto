<?php 
/**
 * ���� �� ����� ��������� �����������.
 *
 * �������� �� ������ 1C-Bitrix:
 * 		"������������ �������� ���� ������ ����� �� �� ���, ��� � ������������ ����, � ���� ���������� �� ����� � ��������:
 * 		/bitrix/modules/ID ������/lang/ID �����/���� � ����� ������������ ����� ������."
 * ���� ������� ������� ���������� ��� �������� ��������� � ���� ����� ����, ����� �� ��������� ��������� ��������� ��������� ������.   
 */

global $MESS;
// PAYANYWAY.payment/install/index.php
$MESS['PAYANYWAY.PAYMENT_INSTALL_NAME'] = '�������� ������� PayAnyWay';
$MESS['PAYANYWAY.PAYMENT_INSTALL_DESCRIPTION'] = '������ ������ ����������� ������� (VISA, Visa Electron, Maestro, MasterCard, ���)';
$MESS['PAYANYWAY.PAYMENT_PREINSTALL_DESCRIPTION'] = '������ ����������� ������ ��������� ������� PayAnyWay�';
$MESS['PAYANYWAY.PAYMENT_INSTALL_ERROR'] = '��� ��������� ������ �������� ������� PayAnyWay ��������� ������ ��� ����������� ������.';

// PAYANYWAY.payanyway/install/step_ok.php
$MESS['PAYANYWAY.PAYMENT_INSTALL_MESSAGE'] = '������ ��������� ������� PayAnyWay� ��� ����������.';

// PAYANYWAY.payment/install/unstep_ok.php
$MESS['PAYANYWAY.PAYMENT_BTN_CANCEL'] = '������';
$MESS['PAYANYWAY.PAYMENT_SAVE_TABLES'] = '��������� ������� ������ ��������� ������� PayAnyWay�?';

// PAYANYWAY.payment/options.php & PAYANYWAY.payment/install/step_ok.php & PAYANYWAY.payment/admin/PAYANYWAY_agent_log.php
$MESS['PAYANYWAY.PAYMENT_BTN_HELP'] = '������';

// admin/PAYANYWAY_agent_log.php
$MESS['PAYANYWAY.AGENT_ORDER_ID'] = 'ID ������';
$MESS['PAYANYWAY.AGENT_INSERT_DATATIME'] = '����� ���������� ������';
$MESS['PAYANYWAY.AGENT_TYPE_ERROR'] = '��� ������';
$MESS['PAYANYWAY.AGENT_TEXT_ERROR'] = '�������� ������';
$MESS['PAYANYWAY.AGENT_LOGS_TITLE'] = '���� ������ ��������� ������� PayAnyWay�';
$MESS['PAYANYWAY.AGENT_LOGS_DEL'] = '�������';
$MESS['PAYANYWAY.AGENT_DEL_ERROR'] = '���������� ������� ������.';
$MESS['PAYANYWAY.AGENT_NAV'] = '���� ������';
$MESS['PAYANYWAY.AGENT_DEL_CONF'] = '������� ������?';
$MESS['PAYANYWAY.AGENT_F_ORDER_ID'] = 'ID ������';
$MESS['PAYANYWAY.AGENT_F_INSERT_DATATIME'] = '����� ����������';
$MESS['PAYANYWAY.AGENT_F_TYPE_ERROR'] = '��� ������';
$MESS['PAYANYWAY.AGENT_F_TEXT_ERROR'] = '�������� ������';
$MESS['PAYANYWAY.AGENT_FIND'] = '�����';
$MESS['PAYANYWAY.AGENT_F_FIND_TYTLE'] = '������� ������ ��� ������';
$MESS['POST_ALL'] = '���';

// PAYANYWAY.payment/options.php
$MESS['PAYANYWAY.AGENT_LOGS'] = '���� ������';
$MESS['PAYANYWAY.PAYMENT_HELP_TEXT'] = '
<h3>���������� �� ��������� � ��������� ������ ��������� ������� PayAnyWay� � CMS 1C-Bitrix</h3>
<b>��������� ������</b>
<p>
<div>1. ����� ��� ������� �������������� �� ���� � ������ ������������������.</div>
<div>2. ������� � ������ ����������>Marketplace�. � ������ ����� ������ ��������� ������� PayAnyWay�. ������ �������� �� ���� ������. ������ �� ������ �����������.</div>
<div>3. ������� � ������ ������ ��������� ������� PayAnyWay�. ������ �� ������ ������������. ������ ��������� ������� ��������� ������� PayAnyWay� ��� �����������.</div>
<div>4. ����� ��������� ������ �� ������ ���������� � ������. � ������ ������� � ������ ��������� ������� PayAnyWay� ����� ������ ������ ������������.</div>
</p>
<h3>��������� ������</h3>
<b>��������� �������� ������� PayAnyWay</b>
<p>
<div>1. ������� � ������: ��������>��������� ���������>��������� ��������.</div>
<div>2. � ���� ������� ��� �������� �������� ������ ������ �� ������ ��������� ��������� �������, ����� ���� � �������� ���� ������� ����, ��� �������� ����� ��������� �������� �������. ��������� ������ ���������� ����� �������� �������.</div>
<div>3. ������� �� ������� ���������� �������. ��������� ��� ����������� ����. ���� ��������� � ������ ����� �PayAnyWay� ��� ����������� ������. ���� ������������ � ������ �������. ���� ����������� � ������ �������� 1. ���� ��������� � ������� �������� �������� �������.</div>
<div>4. ������� �� ������� ����������� ����.</div>
<div>&nbsp;&nbsp;a. � ���� ������������ ��� ������� ���� ����������� ��������� �������, ���� �����, ����� ��������� ���� �������� ������� �������� � ������������ ������. � ���� ��������� ��������� �������� ����������� �������� �������. � ���� ����������� �������� �� ��������� ������ �PayAnyWay�. ����������� �������������� ����.</div>
<div>&nbsp;&nbsp;b. ��������� ���� ��������� ��������� ��������.</div>
<div>&nbsp;&nbsp;c. � ���� ������ ������������ ����� ������ �PayAnyWay Account ID�.</div>
<div>&nbsp;&nbsp;d. � ���� ���� �������� ����������� ������� - c�������� ����, ������� �� �������������� � ���������� ������ ������������ ����� � ������� PayAnyWay (Moneta.ru)</div>
<div>&nbsp;&nbsp;j. � ���� ������ ��� �������� ������ (URL_RETURN_OK)� ������ �http://�����_������������_��������/personal/ordercheck/check/�.</div>
<div>&nbsp;&nbsp;k. � ���� ������ ��� ������ ������ (URL_RETURN_NO)� ������ �http://�����_������������_��������/personal/ordercheck/detail/�.</div>
<div>&nbsp;&nbsp;l. � ���� ��������� ����� ������ ��� ��� ��������� ��������� ������ ��� �������� ��� ��� ���������� �������� ������.</div>
<div>5. ������� �� ������� ������������ ���� � ��������� ��� �������� �� �������� � �������� ����������� ����.</div>
<div>6. ������ ������ �����������. � ������ �������� �������� ������� �PayAnyWay�.</div>
</p>
<b>�������� ������</b>
<p>
<div>1. ������� � ������ ����������>������. � ������ ������� ������ ��������� ������� PayAnyWay�. ������ �� ������ ���������. ������ ��������� ���������! ������ ����� ������ �� ������� �� ����� �����������.�.</div>
<div>2. ��� ���������� ������ ������ � ���� ������ ����� �������� ������� �������� ���� ���������� ������� ������ ��������� ������� PayAnyWay�?�.</div>
<div>3. ������ �� ������ ���������. � ������ ������� � ������ ��������� ������� PayAnyWay� ����� ������ ������ ��� �����������.</div>
<div>&nbsp;&nbsp;<b>����������</b></div>
<div>&nbsp;&nbsp;1. ���� ������ ������� � ���� ���������� ������� ������ ��������� ������� PayAnyWay�?� � �� ������� � ������ ������ ����� ������� �� ���� ������. ���� �������� ������� � ������� ��������� � ����� ���������� ��� ����������� ���������, ��� ������ ����������� � ����� ��������.</div>
<div>&nbsp;&nbsp;2. ��� �������� ������ ��������� ����� � ������� ����������� ������_�_bitrix/bitrix/modules/payanyway.payment�, ��� ��������� ����� ����� �������.</div>
</p>
<b>���������� ������</b>
<p>
<div>1. ������� � ������ ����������>Marketplace�>��������� �����������.</div>
<div>2. ������� �� ������� ������� ����������. ��� ������� ���������� ��� ������ ��������� ������� PayAnyWay� ������� �� ���. ������ �� ������ ����������� �����������. ����������� ��������� �������� ����������� ����������: (����������)�.</div>
</p>
<b>����������</b>
<p>
<div>��� �������� ���� ������� Uiteller � ����� 1C-Bitrix �������� ������������ �������������:</<div>
<div>1. ������ ������������ ����: �PayAnyWayPlugin add�.</<div>
<div>2. ����� ������������ ����: �/PayAnyWayPlugin add�.</div>
<div>3. ������ ����������� ����: �PayAnyWayPlugin change�.</div>
<div>4. ����� ����������� ����: �/PayAnyWayPlugin change�.</div>
</p>';
?>