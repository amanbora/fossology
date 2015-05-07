<?php
/*
 Copyright (C) 2014-2015, Siemens AG
 Author: Johannes Najjar

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 version 2 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License along
 with this program; if not, write to the Free Software Foundation, Inc.,
 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */
use Fossology\Lib\Data\Highlight;

require_once('Xpview.php');

class IpView extends Xpview
{
  const NAME = 'ip-view';

  function __construct()
  {
    $this->decisionTableName = "ip_decision";
    $this->tableName = "ip";
    $this->modBack = 'ip-hist';
    $this->optionName = "skipFileIp";
    $this->ajaxAction = "setNextPrevIp";
    $this->skipOption = "noIp";
    $this->highlightTypeToStringMap = array(Highlight::IP => 'Patent');
    $this->typeToHighlightTypeMap = array('ip' => Highlight::IP);
    $this->xptext = 'patent';
    parent::__construct(self::NAME,array(
        self::TITLE => _("View patent Analysis")
    ));
  }
}

register_plugin(new IpView());