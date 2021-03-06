<?php
namespace SapiStudio\Charts\Amchart;
/*

/**
 * Class to create a world chart from the amCharts library.
 */
class AmWorldChart extends AmChart
{
    protected $defaultSliceConfig = array();
    protected $jsPath = "map.js";
    /**
     * @see AmChart::getJSPath()
     */
    public function getJSPath()
    {
        return $this->jsPath;
    }
    /**
     * @see AmChart::setJSPath($path)
     */
    public function setJsPath($path)
    {
        $this->jsPath = $path;
    }
    protected function setDefaultConfig()
    {
        $this->config['type'] = "map";
    }
    /**
     * Returns the config array.
     *
     * @return    array
     */
    public function getConfig()
    {
        return $this->config;
    }
}
