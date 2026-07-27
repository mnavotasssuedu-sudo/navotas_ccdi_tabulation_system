<?php

namespace App\Exports;

use App\Models\Score;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ScoresExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Score::with(['judge', 'contestant', 'criteria'])
            ->get()
            ->map(function ($score) {
                return [
                    'Judge' => $score->judge->judge_name ?? '',
                    'Contestant' => ($score->contestant->first_name ?? '') . ' ' .
                                    ($score->contestant->last_name ?? ''),
                    'Criteria' => $score->criteria->name ?? '',
                    'Score' => $score->score,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Judge',
            'Contestant',
            'Criteria',
            'Score',
        ];
    }
}