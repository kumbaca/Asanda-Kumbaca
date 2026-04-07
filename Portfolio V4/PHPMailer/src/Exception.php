{\rtf1\ansi\ansicpg1252\cocoartf2868
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
\
/**\
 * PHPMailer Exception class.\
 * PHP Version 5.5.\
 *\
 * @see       https://github.com/PHPMailer/PHPMailer/ The PHPMailer GitHub project\
 *\
 * @author    Marcus Bointon (Synchro/coolbru) <phpmailer@synchromedia.co.uk>\
 * @author    Jim Jagielski (jimjag) <jimjag@gmail.com>\
 * @author    Andy Prevost (codeworxtech) <codeworxtech@users.sourceforge.net>\
 * @author    Brent R. Matzelle (original founder)\
 * @copyright 2012 - 2020 Marcus Bointon\
 * @copyright 2010 - 2012 Jim Jagielski\
 * @copyright 2004 - 2009 Andy Prevost\
 * @license   https://www.gnu.org/licenses/old-licenses/lgpl-2.1.html GNU Lesser General Public License\
 * @note      This program is distributed in the hope that it will be useful - WITHOUT\
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or\
 * FITNESS FOR A PARTICULAR PURPOSE.\
 */\
\
namespace PHPMailer\\PHPMailer;\
\
/**\
 * PHPMailer exception handler.\
 *\
 * @author Marcus Bointon <phpmailer@synchromedia.co.uk>\
 */\
class Exception extends \\Exception\
\{\
    /**\
     * Prettify error message output.\
     *\
     * @return string\
     */\
    public function errorMessage()\
    \{\
        return '<strong>' . htmlspecialchars($this->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\\n";\
    \}\
\}}