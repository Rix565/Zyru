<?php
namespace App\Core;
class Logger
{
    /** This functions returns an information on the web front-end. Commonly used when running on dev.
     * @param text $string the information to display
     */
    public function information($string): void
    {
        echo "<span>[zyru: info]: ".$string."</span>";
    }
    /** This functions returns an warning on the web front-end. Commonly used when running on dev.
     * @param text $string the warning to display
     */
    public function warning($string): void
    {
        echo "<span style='color: yellow;'>[zyru: WARN!]: ".$string."</span>";
    }
    /** This functions returns an error on the web front-end.
     * @param text $string the error to display
     */
    public function error($string): void
    {
        echo "<span style='color: red;'>[zyru: ERROR!]: ".$string."</span>";
    }
    /** This functions makes the whole system stop working and throw an error.
     * @param text $string the die information
     */
    public function zdie($string): void
    {
        die("<span style='color: darkred;'>[zyru: FATAL ERROR!]: ".$string."</span>");
    }
}