<?php


class EventPage extends Page
{

    public function hasSubject() {

        if ($this->subject()->exists() and $this->subject()->isNotEmpty()) {
            return true;
        }

    }

    public function hasRoom() {

        if ($this->room()->exists() and $this->room()->isNotEmpty()) {
            return true;
        }

    }

    public function getSubject() {

        $subjects = [
            's1' => 'Austerity Urbanism and Social Reproduction',
            's2' => 'War, Security, Humanitarianism',
            's3' => 'Urban Contestations',
            's4' => 'Migration and global mobility',
            's5' => 'Rise of neo-fascism, nationalism and authoritarianism',
            's6' => 'New geographies of colonialism',
            's7' => 'Socioenvironmental conflicts',
            's8' => 'Geographies of gender and sexuality'
        ];

        return $subjects[$this->subject()];
    }

    public function hasContent() {

        if( ($this->coordinators()->exists() and $this->coordinators()->isNotEmpty()) or
            ($this->presentations()->exists() and $this->presentations()->isNotEmpty()) or
            ($this->contentblocks()->exists() and $this->contentblocks()->isNotEmpty())
        ) {
            return true;
        }
    }
}
